<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\CarSell;

class FrontendController extends Controller
{
    function contact(Request $request){

        $contact = new Contact();

        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return back()->with('message', 'Success');
    }


    function view_car($model_name){
        
        $cars = CarSell::where('model_name', $model_name)->get();
        return view('buyrent.rental', compact('cars')); 
    }


}
