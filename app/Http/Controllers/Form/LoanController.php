<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Loan;

class LoanController extends Controller
{
    

    function applied(Request $request){

        $loan = new Loan;

        $loan->your_name = $request->your_name;
        $loan->email = $request->email;
        $loan->mobile_no = $request->mobile_no;
    
        $loan->save();

        return back()->with('success', 'Your Request Has been Procceed, We Will Contact you soon!');

    }

    function loan(){

        return view('loan.loan');
    }
}
