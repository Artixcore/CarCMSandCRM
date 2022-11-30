<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\CarSell;
use App\User;
use Image;

class CarController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function all(){
        $cars = CarSell::all();
        return view('admin.car.all', compact('cars'));
    }

    function new(){
      
        return view('admin.car.new');
    }

    function save_car(Request $request){

        // $validatedData = $request->validate([
        //     'images' => ['required','mimes:jpeg,png,jpg','max:6072'],
        //     'registration_date' => ['required', 'min:3', 'max:255'],
        //     'ownership' => ['required', 'min:3', 'max:255'],
        //     'mileage' => ['required', 'min:3', 'max:255'],
        //     'vehicle_scheme' => ['required', 'min:3', 'max:255'],
        //     'coe' => ['required', 'min:3', 'max:255'],
        //     'omv' => ['required', 'min:3', 'max:255'],
        //     'arf' => ['required', 'min:3', 'max:255'],
        //     'minimum_parf' => ['required', 'min:3', 'max:255'],
        //     'paper_value' => ['required', 'min:3', 'max:255'],
        //     'road_tax_expiry_date' => ['required', 'min:3', 'max:255'],
        //     'vehicle_code' => ['required', 'min:3', 'max:255'],
        //     'manufacturing_year' => ['required', 'min:3', 'max:255'],
        //     'primary_color' => ['required', 'min:3', 'max:255'],
        //     'transmission' => ['required', 'min:3', 'max:255'],
        //     'fuel_type' => ['required', 'min:3', 'max:255'],
        //     'engine_capacity' => ['required', 'min:3', 'max:255'],
        //     'power' => ['required', 'min:3', 'max:255'],
        //     'vehicle_attachment' => ['required', 'min:3', 'max:255'],
        //     'features' => ['required', 'min:3', 'max:255'],
        //     'accessories' => ['required', 'min:3', 'max:255'],
        //     'description' => ['required', 'min:3', 'max:255'],
        // ]);


      
        if($request->hasfile('images'))
        {
           foreach($request->file('images') as $file)
           {
               $name = time().'.'.$file->extension();
               $file->move(public_path().'/asset/cars/', $name);  
               $data[] = $name;  
           }
        }
 
        $cars = new CarSell();

        $cars->images=json_encode($data);
        $cars->registration_date = $request->registration_date;
        $cars->model_name = $request->model_name;
        $cars->ownership = $request->ownership;
        $cars->mileage = $request->mileage;
        $cars->vehicle_scheme = $request->vehicle_scheme;
        $cars->coe = $request->coe;
        $cars->omv = $request->omv;
        $cars->arf = $request->arf;
        $cars->minimum_parf = $request->minimum_parf;
        $cars->paper_value = $request->paper_value;
        $cars->road_tax_expiry_date = $request->road_tax_expiry_date;
        $cars->vehicle_code = $request->vehicle_code;
        $cars->manufacturing_year = $request->manufacturing_year;
        $cars->primary_color = $request->primary_color;
        $cars->transmission = $request->transmission;
        $cars->fuel_type = $request->fuel_type;
        $cars->engine_capacity = $request->engine_capacity;
        $cars->power = $request->power;
        $cars->vehicle_attachment = $request->vehicle_attachment;
        $cars->features = $request->features;
        $cars->accessories = $request->accessories;
        $cars->description = $request->description;
        $cars->price = $request->price;

        $request->user()->carsell()->save($cars);

        return back()->with('message', 'Save Successful');

    }


 




}
