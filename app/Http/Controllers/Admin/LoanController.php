<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Loan;
use Alert;

class LoanController extends Controller
{
    function loan(){
        return view('admin.loan.loan');
    }

    function applied(Requset $request){

        $loan = new Loan;

        $loan->your_name = $request->your_name;
        $loan->email = $request->email;
        $loan->mobile_no = $request->mobile_no;
    
        $loan->save();

        return back()->with('success', 'Your Request Has been Procceed');

    }
}
