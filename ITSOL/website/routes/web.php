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
Route::get('/add_testimonial_banner',[Controller::class,'displaytestimonialbannersection']);
Route::get('/add_testimonialsection2',[Controller::class,'displaytestsecondsection']);
Route::get('/add_services_banner',[Controller::class,'displayservicesbannersection']);
Route::get('/add_servicesection2',[Controller::class,'displayservice2ndsection']);
Route::get('/add_servicesection3',[Controller::class,'displayservice3rdsection']);
Route::get('/add_portfolio3_banner',[Controller::class,'displayportfolio3bannersection']);
Route::get('/add_portfolio3_section2',[Controller::class,'displayportfolio3secondsection']);
Route::get('/add_portfolio3_section3',[Controller::class,'displayportfolio3thirdsection']);
Route::get('/add_portfoliosingle_banner',[Controller::class,'displayportfoliobannersection']);
Route::get('/add_portfolio_section2',[Controller::class,'displayportfoliosecondsection']);
Route::get('/add_portfolio_section3',[Controller::class,'displayportfoliothirdsection']);
Route::get('/add_portfolio_section4',[Controller::class,'displayportfoliofourthsection']);
Route::get('/add_bloglistbanner',[Controller::class,'displayblogbannersection']);
Route::get('/add_bloglist_section2',[Controller::class,'displaybloglistsection2']);
Route::get('/add_contactbanner',[Controller::class,'displaycontactbanner']);
Route::get('/add_contactsection2',[Controller::class,'displaycontactsection2']);


