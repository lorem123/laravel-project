<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
  Route::get('/', 'PagesController@index')->name('pages.index');
  Route::get('/about', 'PagesController@about')->name('pages.about');
});

 Route::get('/admin', 'App\Http\Controllers\admin\LoginController@index');
 Route::post('/admin', 'App\Http\Controllers\admin\LoginController@authenticate')->name('admin.login');

  Route::group(['prefix' => 'admin','middleware' => 'admin_user','namespace' => 'App\Http\Controllers\admin'],function () {
    Route::get('/logout', 'LoginController@perform')->name('admin.logout');
    Route::get('users', 'UsersController@index')->name('admin.users');
    Route::get('users/create', 'UsersController@create')->name('admin.create');
    Route::post('users/create', 'UsersController@savedata')->name('admin.create');
    Route::get('users/edit/{id}', 'UsersController@editUser')->name('admin.edit');
    Route::post('users/edit/{id}', 'UsersController@editData')->name('admin.edit');
    Route::get('user/profile/{id}', 'UsersController@profileData')->name('admin.profile');
    Route::post('user/profile/{id}', 'UsersController@profileEdit')->name('admin.profile');
    Route::get('user/delete/{id}', 'UsersController@destroy')->name('admin.user.destroy');
    Route::get('products', 'ProductsController@index')->name('admin.products');
    Route::get('product/create', 'ProductsController@create')->name('admin.product.create');

  });

  Route::get('home', function () {
      return view('home');
  })->name("home-page");


  Route::get('register',  [RegisterController::class, 'index'])->name('user.register');
  Route::post('register', [RegisterController::class, 'savedata']);

/*Route::match(['get', 'post'], 'register', function () {
    if (request()->isMethod('post')) {
        $formData = request()->all();
        //$name = request()->input('name');
       // $email = request()->input('email');
        //dd($name);
    } else {
        return view('register');
    }
    
})->name('user.register');
*/