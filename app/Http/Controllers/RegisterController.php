<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Registers;
use DB;

class RegisterController extends Controller
{
    public function index()
    {
      return view('register');
    }
    public function savedata(Request $request) {
        $fname = $request->input('firstName');
        $lname = $request->input('lastName');
        $dob = $request->input('gender');
        $gender = $request->input('gender');
        $email = request()->input('emailAddress');
        $phone = $request->input('phoneNumber');
        $password = Hash::make($request->input('password'));

        $registers = new Registers();
        $registers->name =$fname;
        $registers->email = $email;
        $registers->password = $password;
        if($registers->save()){
           return redirect('register')->with('status', 'Successfully register!');
        }
    }
}
