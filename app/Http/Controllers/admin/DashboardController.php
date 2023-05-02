<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class DashboardController extends Controller
{
    public function index() {

    if(!Auth::check()) 
    {
      //  dd("dhanraj");
    }

        return view('admin.login');
        //return view('admin.dashboard');
    }
}
