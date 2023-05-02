<?php

namespace App\Http\Controllers\admin;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        //$users = DB::table('users')->count();
        $users = DB::table('users')->get();
        return view('admin.users', ['users' => $users]);
       // return view('admin.users');
    }
    public function create()
    {
        return view('admin.create');
    }
}
