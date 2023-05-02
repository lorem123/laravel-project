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

Route::group(['namespace' => 'App\Http\Controllers\admin'], function()
{
  Route::get('/admin', 'LoginController@index');
  Route::post('/admin', 'LoginController@authenticate')->name('admin.login');
  Route::get('/admin/logout', 'LoginController@perform')->name('admin.logout');
  Route::get('/admin/users', 'UsersController@index')->name('admin.users');
  Route::get('/admin/users/create', 'UsersController@create')->name('admin.create');
  Route::post('/admin/users/create', 'UsersController@savedata')->name('admin.create');

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
