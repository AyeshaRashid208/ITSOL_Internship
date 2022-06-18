<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route ::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('dashboard',[AdminControler::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminControler::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminControler::class,'settings'])->name('admin.settings');
});
Route ::group(['prefix'=>'user','middleware'=>'auth'], function(){
    Route::get('dashboard',[AdminControler::class,'index'])->name('user.dashboard');
    Route::get('profile',[AdminControler::class,'profile'])->name('user.profile');
    Route::get('settings',[AdminControler::class,'settings'])->name('user.settings');
});