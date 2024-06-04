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

Route::get('/pracovisko', 'App\Http\Controllers\PracoviskoController@show');

Route::get('/bezpecnost', 'App\Http\Controllers\SafetyController@show');
Route::get('/api/bezpecnost', 'App\Http\Controllers\SafetyController@api');


Route::get('/kuchyna', function() {
    return view('card/kitchen');
});

Route::get('/zamestnanci', 'App\Http\Controllers\EmployesController@show');
Route::get('/historia', 'App\Http\Controllers\EmployesController@showhistory');

Route::get('/pracovisko/objekt1', 'App\Http\Controllers\PracoviskoController@Object_one');
Route::get('/pracovisko/objekt2', 'App\Http\Controllers\PracoviskoController@Object_two');
Route::get('/pracovisko/objekt3', 'App\Http\Controllers\PracoviskoController@Object_three');
