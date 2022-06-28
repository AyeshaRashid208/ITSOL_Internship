<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
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
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/portfolio-3-column', function () {
    return view('portfolio-3-column');
});
Route::get('/portfolio-single', function () {
    return view('portfolio-single');
});
Route::get('/blog-list', function () {
    return view('blog-list');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post("/upload_details",[Controller::class,"upload"])->name('message.store');
Route::get('/admin',[AdminController::class,'index']);
Route::post("/admin",[AdminController::class,"makelogin"]);

//Route::get(['middleware' => 'auth:admin'],function(){
Route::get("/dashboard",[AdminController::class,"dashboard"]);
//});
//Route::get('/page_add',[PageController::class,'AddPage']);
//Route::post('/page_add',[PageController::class,'AddPage']);
//Route::post('/page_create',[PageController::class,'CreatePage'])->name('page-create');
Route::post('/add_banner',[Controller::class,'addbanner']);
//Route::get('/add_banner',[Controller::class,'addbanner']);
Route::get('/add_banner',[Controller::class,'displaybanner']);
Route::get('/add_homesection2',[Controller::class,'displayhome2ndsection']);
Route::get('/add_homesection3',[Controller::class,'displayhome3rdsection']);
Route::get('/add_homesection4',[Controller::class,'displayhome4rthsection']);
Route::get('/add_homesection5',[Controller::class,'displayhome5thsection']);
Route::get('/add_homesection6',[Controller::class,'displayhome6thsection']);