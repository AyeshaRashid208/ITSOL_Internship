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
use App\Http\Controllers\PortfolioController;


Route::get("/",[HomeController::class,"viewhome"]);
Route::get("/home",[HomeController::class,"viewhome"]);
Route::get("/about",[AboutController::class,"viewabout"]);
Route::get("/team",[TeamController::class,"viewteam"]);
Route::get("/testimonial",[TestimonialController::class,"viewtest"]);
Route::get("/services",[HomeController::class,"viewservices"]);
Route::get("/portfolio-3-column",[PortfolioThreeController::class,"viewport"]);
Route::get("/portfolio-single",[PortfolioController::class,"viewport"]);

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

//home banner
Route::get('/view_banner',[HomeController::class,'displaybanner']);
Route::get('/create_banner',[HomeController::class,'createbanner']);
Route::get('/edit_banner',[HomeController::class,'editbanner']);
Route::put('/add_banner',[HomeController::class,'addbanner']);
Route::post('/add_banner',[HomeController::class,'addbanner']);

//homesection2
Route::get('/view_homesection2',[HomeController::class,'displayhome2ndsection']);
Route::get('/create_homesection2',[HomeController::class,'createhome2ndsection']);
Route::get('/edit_homesection2/{id}',[HomeController::class,'edithome2ndsection']);
Route::post('/edit',[HomeController::class,'updatehome2ndsection']);
Route::get('del_homesection2/{id}',[HomeController::class,'destroy']);
Route::post('/add_homesection2',[HomeController::class,'addhome2ndsection']);

//homesection3
Route::get('/create_homesection3',[HomeController::class,'createhome3rdsection']);
Route::post('/create_homesection3',[HomeController::class,'addhome3rdsection']);
Route::get('/view_homesection3',[HomeController::class,'displayhome3rdsection']);
Route::get('/edit_homesection3/{id}',[HomeController::class,'edithome3rdsection']);
Route::post('/updatehomesection3',[HomeController::class,'updatehome3rdsection']);
Route::get('del_homesection3/{id}',[HomeController::class,'destroysection3']);


//homesection4
Route::get('/create_homesection4',[HomeController::class,'createhome4rthsection']);
Route::post('/create_homesection4',[HomeController::class,'addhome4rthsection']);
Route::get('/view_homesection4',[HomeController::class,'displayhome4rthsection']);
Route::get('/edit_homesection4/{id}',[HomeController::class,'edithome4rthsection']);
Route::post('/updatehomesection4',[HomeController::class,'updatehome4rthsection']);
Route::get('del_homesection4/{id}',[HomeController::class,'destroysection4']);

//homesection5
Route::get('/create_homesection5',[HomeController::class,'createhome5thsection']);
Route::post('/create_homesection5',[HomeController::class,'addhome5thsection']);
Route::get('/view_homesection5',[HomeController::class,'displayhome5thsection']);
Route::get('/edit_homesection5/{id}',[HomeController::class,'edithome5thsection']);
Route::post('/updatehomesection5',[HomeController::class,'updatehome5thsection']);
Route::get('del_homesection5/{id}',[HomeController::class,'destroysection5']);

//homesection6
Route::get('/create_homesection6',[HomeController::class,'createhome6thsection']);
Route::post('/create_homesection6',[HomeController::class,'addhome6thsection']);
Route::get('/view_homesection6',[HomeController::class,'displayhome6thsection']);
Route::get('/edit_homesection6/{id}',[HomeController::class,'edithome6thsection']);
Route::post('/updatehomesection6',[HomeController::class,'updatehome6thsection']);
Route::get('del_homesection6/{id}',[HomeController::class,'destroysection6']);

//homesection8

Route::get('/create_homesection8',[HomeController::class,'createhome8thsection']);
Route::post('/create_homesection8',[HomeController::class,'addhome8thsection']);
Route::get('/view_homesection8',[HomeController::class,'displayhome8thsection']);
Route::get('/edit_homesection8/{id}',[HomeController::class,'edithome8thsection']);
Route::post('/updatehomesection8',[HomeController::class,'updatehome8thsection']);
Route::get('del_homesection8/{id}',[HomeController::class,'destroysection8']);

//homesection9

Route::get('/create_homesection7',[HomeController::class,'createhome7thsection']);
Route::post('/create_homesection7',[HomeController::class,'addhome7thsection']);
Route::get('/view_homesection7',[HomeController::class,'displayhome7thsection']);
Route::get('/edit_homesection7/{id}',[HomeController::class,'edithome7thsection']);
Route::post('/updatehomesection7',[HomeController::class,'updatehome7thsection']);
Route::get('del_homesection7/{id}',[HomeController::class,'destroysection7']);


Route::get('/add_about_banner',[AboutController::class,'displayaboutbannersection']);
Route::post('/add_about_banner',[AboutController::class,'addaboutbannersection']);

//aboutsection2
Route::get('/create_aboutsection2',[AboutController::class,'createabout2ndsection']);
Route::post('/add_aboutsection2',[AboutController::class,'addabout2ndsection']);
Route::get('/view_aboutsection2',[AboutController::class,'displayabout2ndsection']);
Route::get('/edit_aboutsection2/{id}',[AboutController::class,'editabout2ndsection']);
Route::post('/updateaboutsection2',[AboutController::class,'updateabout2ndsection']);
Route::get('del_aboutsection2/{id}',[AboutController::class,'destroysection2']);


Route::get('/add_aboutsection3',[AboutController::class,'displayabout3rdsection']);
Route::post('/add_aboutsection3',[AboutController::class,'addabout3rdsection']);
Route::get('/add_aboutsection4',[AboutController::class,'displayabout4rthsection']);
Route::post('/add_aboutsection4',[AboutController::class,'addabout4rthsection']);
Route::get('/add_team_banner',[TeamController::class,'displayteamaboutsection']);
Route::post('/add_team_banner',[TeamController::class,'addteambannersection']);



//teamsection2
Route::get('/create_teamsection2',[TeamController::class,'createteamsecondsection']);
Route::post('/create_teamsection2',[TeamController::class,'addteam2ndsection']);
Route::get('/view_teamsection2',[TeamController::class,'displayteam2ndsection']);
Route::get('/edit_teamsection2/{id}',[TeamController::class,'editteam2ndsection']);
Route::post('/updateteamsection2',[TeamController::class,'updateteam2ndsection']);
Route::get('del_teamsection2/{id}',[TeamController::class,'destroysection2']);


Route::get('/add_teamsection3',[TeamController::class,'displayteamthirdsection']);
Route::post('/add_teamsection3',[TeamController::class,'addteam3rdsection']);
Route::get('/add_testimonial_banner',[TestimonialController::class,'displaytestimonialbannersection']);
Route::post('/add_testimonial_banner',[TestimonialController::class,'addbanner']);
//testimonialsection2
Route::get('/create_testimonialsection2',[TestimonialController::class,'createtestsecondsection']);
Route::post('/add_testimonialsection2',[TestimonialController::class,'addtest2ndsection']);
Route::get('/view_testsection2',[TestimonialController::class,'displaytestsecondsection']);
Route::get('del_testsection2/{id}',[TestimonialController::class,'destroysection2']);
Route::get('/edit_testsection2/{id}',[TestimonialController::class,'edittest2ndsection']);
Route::post('/updatetestsection2',[TestimonialController::class,'updatetest2ndsection']);


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

Route::get('/add_portfoliosingle_banner',[PortfolioController::class,'displayportfoliobannersection']);
Route::post('/add_portfoliosingle_banner',[PortfolioController::class,'addbannersection']);

//portfoliosinglesection2
Route::get('/create_portsection2',[PortfolioController::class,'createportfoliosecondsection']);
Route::post('/create_portsection2',[PortfolioController::class,'addportfoliosecondsection']);
Route::get('/view_portsection2',[PortfolioController::class,'displayportfoliosecondsection']);
Route::get('del_portsection2/{id}',[PortfolioController::class,'destroysection2']);
Route::get('/edit_portsection2/{id}',[PortfolioController::class,'editport2ndsection']);
Route::post('/updateportsection2',[PortfolioController::class,'updateport2ndsection']);




Route::get('/add_portfolio_section3',[PortfolioController::class,'displayportfoliothirdsection']);
Route::get('/add_portfolio_section4',[PortfolioController::class,'displayportfoliofourthsection']);
Route::get('/add_bloglistbanner',[Controller::class,'displayblogbannersection']);
Route::get('/add_bloglist_section2',[Controller::class,'displaybloglistsection2']);
Route::get('/add_contactbanner',[Controller::class,'displaycontactbanner']);
Route::get('/add_contactsection2',[Controller::class,'displaycontactsection2']);


