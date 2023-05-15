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
        $name = $request->input('name');
        $email = request()->input('emailAddress');
        $password = Hash::make($request->input('password'));

        $registers = new Registers();
        $registers->name =$name;
        $registers->email = $email;
        $registers->password = $password;
        if($registers->save()){
           return redirect('register')->with('status', 'Successfully register!');
        }
    }
}
