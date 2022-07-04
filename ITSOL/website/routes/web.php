<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioThreeController;
Route::get("/",[HomeController::class,"viewhome"]);
Route::get("/home",[HomeController::class,"viewhome"]);
Route::get("/about",[AboutController::class,"viewabout"]);
Route::get("/team",[TeamController::class,"viewteam"]);
Route::get("/testimonial",[TestimonialController::class,"viewtest"]);
Route::get("/services",[ServiceController::class,"viewservice"]);
Route::get("/portfolio-3-column",[PortfolioThreeController::class,"viewport"]);

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
Route::post('/add_banner',[HomeController::class,'addbanner']);
Route::get('/add_banner',[HomeController::class,'displaybanner']);
Route::get('/add_homesection2',[HomeController::class,'displayhome2ndsection']);
Route::post('/add_homesection2',[HomeController::class,'addhome2ndsection']);
Route::get('/add_homesection3',[HomeController::class,'displayhome3rdsection']);
Route::post('/add_homesection3',[HomeController::class,'addhome3rdsection']);
Route::get('/add_homesection4',[HomeController::class,'displayhome4rthsection']);
Route::post('/add_homesection4',[HomeController::class,'addhome4rthsection']);
Route::get('/add_homesection5',[HomeController::class,'displayhome5thsection']);
Route::post('/add_homesection5',[HomeController::class,'addhome5thsection']);
Route::get('/add_homesection6',[HomeController::class,'displayhome6thsection']);
Route::post('/add_homesection6',[HomeController::class,'addhome6thsection']);
Route::get('/add_homesection7',[HomeController::class,'displayhome7thsection']);
Route::post('/add_homesection7',[HomeController::class,'addhome7thsection']);
Route::get('/add_about_banner',[AboutController::class,'displayaboutbannersection']);
Route::post('/add_about_banner',[AboutController::class,'addaboutbannersection']);
Route::get('/add_aboutsection2',[AboutController::class,'displayabout2ndsection']);
Route::post('/add_aboutsection2',[AboutController::class,'addabout2ndsection']);
Route::get('/add_aboutsection3',[AboutController::class,'displayabout3rdsection']);
Route::post('/add_aboutsection3',[AboutController::class,'addabout3rdsection']);
Route::get('/add_aboutsection4',[AboutController::class,'displayabout4rthsection']);
Route::post('/add_aboutsection4',[AboutController::class,'addabout4rthsection']);
Route::get('/add_team_banner',[TeamController::class,'displayteamaboutsection']);
Route::post('/add_team_banner',[TeamController::class,'addteambannersection']);
Route::get('/add_teamsection2',[TeamController::class,'displayteamsecondsection']);
Route::post('/add_teamsection2',[TeamController::class,'addteam2ndsection']);
Route::get('/add_teamsection3',[TeamController::class,'displayteamthirdsection']);
Route::post('/add_teamsection3',[TeamController::class,'addteam3rdsection']);
Route::get('/add_testimonial_banner',[TestimonialController::class,'displaytestimonialbannersection']);
Route::post('/add_testimonial_banner',[TestimonialController::class,'addbanner']);
Route::get('/add_testimonialsection2',[TestimonialController::class,'displaytestsecondsection']);
Route::post('/add_testimonialsection2',[TestimonialController::class,'addtest2ndsection']);
Route::get('/add_services_banner',[ServiceController::class,'displayservicesbannersection']);
Route::post('/add_services_banner',[ServiceController::class,'addservicebannersection']);
Route::get('/add_servicesection2',[ServiceController::class,'displayservice2ndsection']);
Route::post('/add_servicesection2',[ServiceController::class,'addservice2ndsection']);
Route::get('/add_servicesection3',[ServiceController::class,'displayservice3rdsection']);
Route::post('/add_servicesection3',[ServiceController::class,'addservice3rdsection']);
Route::get('/add_servicesection4',[ServiceController::class,'displayservice4rthsection']);
Route::post('/add_servicesection4',[ServiceController::class,'addservice4rthsection']);
Route::get('/add_portfolio3_banner',[PortfolioThreeController::class,'displayportfolio3bannersection']);
Route::post('/add_portfolio3_banner',[PortfolioThreeController::class,'addbannersection']);
Route::get('/add_portfolio3_section2',[PortfolioThreeController::class,'displayportfolio3secondsection']);
Route::post('/add_portfolio3_section2',[PortfolioThreeController::class,'addportfoliothrsecondsection']);
Route::get('/add_portfolio3_section3',[PortfolioThreeController::class,'displayportfolio3thirdsection']);
Route::get('/add_portfoliosingle_banner',[Controller::class,'displayportfoliobannersection']);
Route::get('/add_portfolio_section2',[Controller::class,'displayportfoliosecondsection']);
Route::get('/add_portfolio_section3',[Controller::class,'displayportfoliothirdsection']);
Route::get('/add_portfolio_section4',[Controller::class,'displayportfoliofourthsection']);
Route::get('/add_bloglistbanner',[Controller::class,'displayblogbannersection']);
Route::get('/add_bloglist_section2',[Controller::class,'displaybloglistsection2']);
Route::get('/add_contactbanner',[Controller::class,'displaycontactbanner']);
Route::get('/add_contactsection2',[Controller::class,'displaycontactsection2']);


