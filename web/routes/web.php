<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/pracovisko', function() {
    return view('card/office');
});

Route::get('/bezpecnost', 'App\Http\Controllers\SafetyController@show');


Route::get('/kuchyna', function() {
    return view('card/kitchen');
});

Route::get('/zamestnanci', function (){
    return view('card/employes');
});