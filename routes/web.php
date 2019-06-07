<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.Index');
});

Route::get('/index', function () {
    return view('home.Index');
});

//Route::get('Suppliers/', function () {
//    return view('Suppliers.index');
//});

Route::get('Suppliers/', 'SupplierController@index');

//Route::get('Suppliers/Create', function () {
//    return view('Suppliers.Create');
//});

Route::get('Suppliers/Create', 'SupplierController@Create');

Route::Post('Suppliers/Create', 'SupplierController@CreatePost');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
Route::get('logout','LoginController@logout');



Route::get('/home/about', function () {
    return view('home.about');
});

Route::get('/home/contact', function () {
    return view('home.contact');
});