<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PreInsurance;
use App\Insurance;

class InsuranceController extends Controller
{
    function pre_insurance_form(Request $request){

        $insurance = new PreInsurance();

        $insurance->vehicle_no = $request->vehicle_no;
        $insurance->your_name  = $request->your_name;
        $insurance->mobile_no  = $request->mobile_no;

        $insurance->save();

        return redirect('insurance.quote');

    }

    function insurance_request(){

        return view('admin.Insurance.insurance');
    }

    function insurance_form(Request $request){

        $insurance = new Insurance();

        $insurance->number = "In".rand(1,30).uniqid();
        $insurance->owner_id_type = $request->owner_id_type;
        $insurance->owner_id_no = $request->owner_id_no;
        $insurance->name = $request->name;
        $insurance->mobile = $request->mobile;
        $insurance->email = $request->email;
        $insurance->date_of_birth = $request->date_of_birth;
        $insurance->license_pass_date = $request->license_pass_date;
        $insurance->gender = $request->gender;
        $insurance->marital_status = $request->marital_status;
        $insurance->vehicle_plate_no = $request->vehicle_plate_no;
        $insurance->insurance_coverage = $request->insurance_coverage;
        $insurance->renewal_ndc = $request->renewal_ndc;
        $insurance->current_insurance = $request->current_insurance;
        $insurance->current_renewal_premium = $request->current_renewal_premium;
        $insurance->driver_name = $request->driver_name;
        $insurance->driver_id_no = $request->driver_id_no;
        $insurance->driver_date_of_birth = $request->driver_date_of_birth;
        $insurance->driver_license_pass_date = $request->driver_license_pass_date;
        // $insurance->driver_license_pass_date = $request->driver_license_pass_date;
        $insurance->driver_gender = $request->driver_gender;
        $insurance->driver_marital_status = $request->driver_marital_status;
        $insurance->driver_occupation = $request->driver_occupation;
        $insurance->driver_nationality = $request->driver_nationality;
        $insurance->driver_relationship = $request->driver_relationship;

        $insurance->save();

        return back();
    }
}
