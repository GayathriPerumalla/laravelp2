<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
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

Route::get('/email', function () {
    return new WelcomeMail();
});



Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');


Route::get('/customers/{customerid}', 'CustomerController@show');
