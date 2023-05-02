<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Login;
use Illuminate\Support\Facades\Session;
use Auth;
use DB;
use Hash;

class LoginController extends Controller
{
    public function index() {

        if(!Auth::guard('admin_web')->check())
        {
          return view('admin.login');
        }
        else {
          return view('admin.dashboard');
        }
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $credentials = $request->only('email', 'password');
 
        if (Auth::guard('admin_web')->attempt(['email' => $email, 'password' => $password])) {
            //dd("YESSSS", auth()->guard('admin_web')->user());
            return redirect('admin');
        }
        else{
            dd("dfdfdfd");
        }
    }

    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        Session::flush();        
        Auth::guard('admin_web')->logout();
        return redirect('admin');
    }
}
