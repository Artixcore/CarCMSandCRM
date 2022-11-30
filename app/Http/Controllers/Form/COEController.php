<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\COE;


class COEController extends Controller
{
    function ceo_save(Request $request){

        $coe = new COE();

        $coe->vehicle_no = $request->vehicle_no;
        $coe->your_name  = $request->your_name;
        $coe->mobile_no  = $request->mobile_no;

        $coe->save();

        return back();
    }

    function load_coe(){

        return view('admin.coe.coe');
    }
}
