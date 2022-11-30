<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Warrenty;

class WarrentyController extends Controller
{
    function post_warrenty(Request $request){

        $warrenty = new Warrenty();

        $warrenty->car_company = $request->car_company;
        $warrenty->car_model = $request->car_model;
        $warrenty->car_type = $request->car_type;
        $warrenty->your_name = $request->your_name;
        $warrenty->mobile_no = $request->mobile_no;

        $warrenty->save();

        return back();
    }


    function get_warrenty(){
        return view('admin.warrenty.warrenty');
    }

}
