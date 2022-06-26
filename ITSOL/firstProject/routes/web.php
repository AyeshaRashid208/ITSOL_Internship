<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('index','democontroller@index')->name('index');
Route::get("/",[democontroller::class,"index"]);
/*Route::get('/demo/{name}/{id?}',function($name,$id= null){   //?with optional and withour ? required
   // echo $name." "; //filename withour blade.php
   // echo $id;
   $data = compact('name','id');
   //print_r($data);
   return view('demo')->with($data);
});
Route::any('/test',function(){
    echo "Testing the route!";
});
Route::post('/test',function(){
    echo "Testing the route!";
});
*/