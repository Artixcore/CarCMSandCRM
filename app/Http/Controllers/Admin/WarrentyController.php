<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WarrentyController extends Controller
{
    function get_page(){
        return view('admin.warrenty.policy');
    }

    
}
