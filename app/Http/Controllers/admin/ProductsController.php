<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    public function index()
    {
      $products = DB::table('products')->get();
      return view('admin.products', ['products' => $products]);
    }
    public function create()
    {
      $products = DB::table('products')->get();
      return view('admin.product_create');
    }
}
