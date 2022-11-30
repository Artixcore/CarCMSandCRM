<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;


class ContactController extends Controller
{
    function contact(){

        return view('admin.contacts.contact');
    }

    function compose(){
    
        return view('admin.contacts.compose');
    }

    function composeMail(Request $request){


        $name->name    = $request->name;
        $mail->email   = $request->email;
        $subject->subject = $request->subject;
        $message->message = $request->message;

        mail($name, $mail, $subject, $message);

        return back();
    }
}
