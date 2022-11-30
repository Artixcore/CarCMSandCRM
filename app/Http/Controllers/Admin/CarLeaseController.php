<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lease;

class CarLeaseController extends Controller
{
    
    function get_page(){
        
    }

    function post_lease(Request $request){

        if($request->hasfile('images'))
        {
           foreach($request->file('images') as $file)
           {
               $name = time().'.'.$file->extension();
               $file->move(public_path().'/asset/cars/', $name);  
               $data[] = $name;  
           }
        }
 

        $car = new Lease(); 

        $car->number = "L".rand(1,35).uniqid();
        $car->images = json_encode($data);
        $car->car_company = $request->car_company;
        $car->car_model = $request->car_model;
        $car->price = $request->price;
        $car->duration = $request->duration;
        $car->description = $request->description;
        $car->owner_id_type = $request->owner_id_type;
        $car->owner_id_no = $request->owner_id_no;
        $car->owner_name = $request->owner_name;
        $car->owner_mobile_no = $request->owner_mobile_no;
        $car->owner_email = $request->owner_email;
 
        $car->save();

        return back();
    }

}
