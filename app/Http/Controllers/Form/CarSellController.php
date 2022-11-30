<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\CarSellByOwner;
use Illuminate\Http\Request;
use App\CarInput;

class CarSellController extends Controller
{
    function post_cars(Request $request){

        $cars = new CarInput();

        $cars->owner_id_type = $request->owner_id_type;
        $cars->owner_id_no   = $request->owner_id_no;
        $cars->owner_name    = $request->owner_name;
        $cars->owner_mobile_no    = $request->owner_mobile_no;
        $cars->owner_email   = $request->owner_email;

        $cars->save();

        return back();
    }

    function car_requests(){
        return view('admin.sell.request');
    }

    function sell_by_owner(Request $request){

        if($request->hasfile('images'))
        {
           foreach($request->file('images') as $file)
           {
               $name = time().'.'.$file->extension();
               $file->move(public_path().'/asset/cars/', $name);  
               $data[] = $name;  
           }
        }
 

        $car = new CarSellByOwner(); 

        $car->number = "OW".rand(1,35).uniqid();
        $car->images = json_encode($data);
        $car->vehicle_plate_no = $request->vehicle_plate_no;
        $car->mileage = $request->mileage;
        $car->ask_price = $request->ask_price;
        $car->transmission = $request->transmission;
        $car->purchase_from = $request->purchase_from;
        $car->accident_free = $request->accident_free;
        $car->condition = $request->condition;
        $car->owner_id_type = $request->owner_id_type;
        $car->owner_id_no = $request->owner_id_no;
        $car->owner_name = $request->owner_name;
        $car->owner_mobile_no = $request->owner_mobile_no;
        $car->owner_email = $request->owner_email;
 
        $car->save();

        return back()->with('success', 'Your Request Has been Procceed, We Will Contact you soon!');;
    }
}
