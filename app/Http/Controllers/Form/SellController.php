<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sell;

class SellController extends Controller
{
    function sell_post(Request $request){

        $sell = new Sell();

        $sell->vehicle_no = $request->vehicle_no;
        $sell->your_name  = $request->your_name;
        $sell->mobile_no  = $request->mobile_no;

        $sell->save();

        return redirect('sell-quote')->with('success', 'Your Request Has been Procceed, We Will Contact you soon!');;
   
    }

    function view_sells(){
        return view('admin.sell.sell'); 
    }
}
