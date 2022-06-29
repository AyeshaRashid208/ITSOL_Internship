<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

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
Route::post('/add_banner',[Controller::class,'addbanner']);
//Route::get('/add_banner',[Controller::class,'addbanner']);
Route::get('/add_banner',[Controller::class,'displaybanner']);

Route::get('/add_homesection2',[Controller::class,'displayhome2ndsection']);
Route::post('/add_homesection2',[Controller::class,'addhome2ndsection']);
Route::get('/add_homesection3',[Controller::class,'displayhome3rdsection']);
Route::post('/add_homesection3',[Controller::class,'addhome3rdsection']);
Route::get('/add_homesection4',[Controller::class,'displayhome4rthsection']);
Route::post('/add_homesection4',[Controller::class,'addhome4rthsection']);
Route::get('/add_homesection5',[Controller::class,'displayhome5thsection']);
Route::post('/add_homesection5',[Controller::class,'addhome5thsection']);
Route::get('/add_homesection6',[Controller::class,'displayhome6thsection']);
Route::post('/add_homesection6',[Controller::class,'addhome6thsection']);
Route::get('/add_about_banner',[Controller::class,'displayaboutbannersection']);
Route::post('/add_about_banner',[Controller::class,'addaboutbannersection']);
Route::get('/add_aboutsection2',[Controller::class,'displayabout2ndsection']);
Route::post('/add_aboutsection2',[Controller::class,'addabout2ndsection']);
Route::get('/add_aboutsection3',[Controller::class,'displayabout3rdsection']);
Route::post('/add_aboutsection3',[Controller::class,'addabout3rdsection']);
Route::get('/add_aboutsection4',[Controller::class,'displayabout4rthsection']);
Route::post('/add_aboutsection4',[Controller::class,'addabout4rthsection']);
Route::get('/add_team_banner',[Controller::class,'displayteamaboutsection']);
Route::get('/add_teamsection2',[Controller::class,'displayteamsecondsection']);
Route::get('/add_teamsection3',[Controller::class,'displayteamthirdsection']);