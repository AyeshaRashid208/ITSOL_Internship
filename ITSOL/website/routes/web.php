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
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SingleBlogController;
Route::get("/",[HomeController::class,"viewhome"]);
Route::get("/home",[HomeController::class,"viewhome"]);
Route::get("/about",[AboutController::class,"viewabout"]);
Route::get("/team",[TeamController::class,"viewteam"]);
Route::get("/testimonial",[TestimonialController::class,"viewtest"]);
Route::get("/services",[HomeController::class,"viewservices"]);
Route::get("/portfolio-3-column",[PortfolioThreeController::class,"viewport"]);
Route::get("/portfolio-single",[PortfolioController::class,"viewport"]);
Route::get("/blog-list",[SingleBlogController::class,"viewbloglist"]);
Route::get("/contact",[Controller::class,"viewcontact"]);
Route::get("/blog-single",[SingleBlogController::class,"viewblog"]);




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

//about banner
Route::get('/create_aboutbanner',[AboutController::class,'createaboutbannersection']);
Route::post('/create_aboutbanner',[AboutController::class,'addaboutbannersection']);
Route::get('/view_aboutbanner',[AboutController::class,'displayaboutbannersection']);
Route::get('/edit_aboutbanner',[AboutController::class,'editaboutbanner']);


//aboutsection2
Route::get('/create_aboutsection2',[AboutController::class,'createabout2ndsection']);
Route::post('/add_aboutsection2',[AboutController::class,'addabout2ndsection']);
Route::get('/view_aboutsection2',[AboutController::class,'displayabout2ndsection']);
Route::get('/edit_aboutsection2/{id}',[AboutController::class,'editabout2ndsection']);
Route::post('/updateaboutsection2',[AboutController::class,'updateabout2ndsection']);
Route::get('del_aboutsection2/{id}',[AboutController::class,'destroysection2']);

//aboutsection3
Route::get('/create_aboutsection3',[AboutController::class,'createabout3rdsection']);
Route::post('/create_aboutsection3',[AboutController::class,'addabout3rdsection']);
Route::get('/add_aboutsection3',[AboutController::class,'displayabout3rdsection']);


//aboutsection4
Route::get('/create_aboutsection4',[AboutController::class,'createabout4rthsection']);
Route::post('/create_aboutsection4',[AboutController::class,'addabout4rthsection']);
Route::get('/view_aboutsection4',[AboutController::class,'displayabout4rthsection']);
Route::get('/edit_aboutsection4/{id}',[AboutController::class,'editabout4rthsection']);
Route::post('/updateaboutsection4',[AboutController::class,'updateabout4rthsection']);
Route::get('del_aboutsection4/{id}',[AboutController::class,'destroysection4']);


//Team banner
Route::get('/create_teambanner',[TeamController::class,'createbannersection']);
Route::post('/create_teambanner',[TeamController::class,'addbannersection']);
Route::get('/view_teambanner',[TeamController::class,'displaybannersection']);
Route::get('/edit_teambanner',[TeamController::class,'editbanner']);



//teamsection2
Route::get('/create_teamsection2',[TeamController::class,'createteamsecondsection']);
Route::post('/create_teamsection2',[TeamController::class,'addteam2ndsection']);
Route::get('/view_teamsection2',[TeamController::class,'displayteam2ndsection']);
Route::get('/edit_teamsection2/{id}',[TeamController::class,'editteam2ndsection']);
Route::post('/updateteamsection2',[TeamController::class,'updateteam2ndsection']);
Route::get('del_teamsection2/{id}',[TeamController::class,'destroysection2']);



//Testimonial banner
Route::get('/create_testimonialbanner',[TestimonialController::class,'createbannersection']);
Route::post('/create_testimonialbanner',[TestimonialController::class,'addbannersection']);
Route::get('/view_testimonialbanner',[TestimonialController::class,'displaybannersection']);
Route::get('/edit_testimonialbanner',[TestimonialController::class,'editbanner']);



//testimonialsection2
Route::get('/create_testimonialsection2',[TestimonialController::class,'createtestsecondsection']);
Route::post('/add_testimonialsection2',[TestimonialController::class,'addtest2ndsection']);
Route::get('/view_testsection2',[TestimonialController::class,'displaytestsecondsection']);
Route::get('del_testsection2/{id}',[TestimonialController::class,'destroysection2']);
Route::get('/edit_testsection2/{id}',[TestimonialController::class,'edittest2ndsection']);
Route::post('/updatetestsection2',[TestimonialController::class,'updatetest2ndsection']);


//Services banner
Route::get('/create_servicebanner',[HomeController::class,'createservicebannersection']);
Route::post('/create_servicebanner',[HomeController::class,'addservicebannersection']);
Route::get('/view_servicebanner',[HomeController::class,'displayservicebannersection']);
Route::get('/edit_servicebanner',[HomeController::class,'editservicebanner']);


//service Plan
Route::get('/create_monthlyplan',[HomeController::class,'createservice4rthsection']);
Route::post('/create_monthlyplan',[HomeController::class,'addservice4rthsection']);
Route::get('/view_monthlyplan',[HomeController::class,'displayservice4rthsection']);
Route::get('/view_yearlyplan',[HomeController::class,'displayserviceyearlysection']);
Route::get('/edit_plan/{id}',[HomeController::class,'editplan']);
Route::post('/updateplan',[HomeController::class,'updateplan']);

//Portfolio 3 banner
Route::get('/create_portfoliobanner',[PortfolioThreeController::class,'createbannersection']);
Route::post('/create_portfoliobanner',[PortfolioThreeController::class,'addbannersection']);
Route::get('/view_portfoliobanner',[PortfolioThreeController::class,'displaybannersection']);
Route::get('/edit_portfoliobanner',[PortfolioThreeController::class,'editbanner']);

//portfolio3section2
Route::get('/create_gallery',[PortfolioThreeController::class,'creategallery']);
Route::post('/create_gallery',[PortfolioThreeController::class,'addgallery']);
Route::get('/view_gallery',[PortfolioThreeController::class,'displaygallery']);
Route::get('/edit_gallery/{id}',[PortfolioThreeController::class,'editgallery']);
Route::post('/updategallery',[PortfolioThreeController::class,'updategallery']);
Route::get('del_gallery/{id}',[TestimonialController::class,'delgallery']);

//Portfolio Single banner
Route::get('/create_portbanner',[PortfolioController::class,'createbannersection']);
Route::post('/create_portbanner',[PortfolioController::class,'addbannersection']);
Route::get('/view_portbanner',[PortfolioController::class,'displaybannersection']);
Route::get('/edit_portbanner',[PortfolioController::class,'editbanner']);

//portfoliosinglesection2
Route::get('/create_portsection2',[PortfolioController::class,'createportfoliosecondsection']);
Route::post('/create_portsection2',[PortfolioController::class,'addportfoliosecondsection']);
Route::get('/view_portsection2',[PortfolioController::class,'displayportfoliosecondsection']);
Route::get('del_portsection2/{id}',[PortfolioController::class,'destroysection2']);
Route::get('/edit_portsection2/{id}',[PortfolioController::class,'editport2ndsection']);
Route::post('/updateportsection2',[PortfolioController::class,'updateport2ndsection']);

//portfoliosinglesection3

Route::get('/create_portsection3',[PortfolioController::class,'createportfoliothirdsection']);
Route::post('/create_portsection3',[PortfolioController::class,'addportfoliothirdsection']);
Route::get('/view_portsection3',[PortfolioController::class,'displayportfoliothirdsection']);
Route::get('/edit_portsection3/{id}',[PortfolioController::class,'editport3rdsection']);
Route::post('/updateportsection3',[PortfolioController::class,'updateport3rdsection']);
Route::get('del_portsection3/{id}',[PortfolioController::class,'destroysection3']);


//Blog List banner
Route::get('/create_bloglistbanner',[BlogController::class,'createbannersection']);
Route::post('/create_bloglistbanner',[BlogController::class,'addbannersection']);
Route::get('/view_bloglistbanner',[BlogController::class,'displaybannersection']);
Route::get('/edit_bloglistbanner',[BlogController::class,'editbanner']);
//blogsection2
Route::get('/create_blogsection2',[BlogController::class,'createblogsecondsection']);    
Route::post('/create_blogsection2',[BlogController::class,'addblogsecondsection']);    
Route::get('/view_blogsection2',[BlogController::class,'displayblogsecondsection']);    
Route::get('/edit_blogsection2/{id}',[BlogController::class,'editblog2ndsection']);
Route::post('/updateblogsection2',[BlogController::class,'updateblog2ndsection']);
Route::get('del_blogsection2/{id}',[BlogController::class,'destroysection2']);


//blogsection3
Route::get('/create_blogsection3',[BlogController::class,'createblogthirdsection']);    
Route::post('/create_blogsection3',[BlogController::class,'addblogthirdsection']);    
Route::get('/view_blogsection3',[BlogController::class,'displayblogthirdsection']);    
Route::get('/edit_blogsection3/{id}',[BlogController::class,'editblog3rdsection']);
Route::post('/updateblogsection3',[BlogController::class,'updateblog3rdsection']);
Route::get('del_blogsection3/{id}',[BlogController::class,'destroysection3']);

//Blog Single banner
Route::get('/create_blogbanner',[BlogController::class,'createbannersection']);
Route::post('/create_blogbanner',[BlogController::class,'addbannersection']);
Route::get('/view_blogbanner',[BlogController::class,'displaybannersection']);
Route::get('/edit_blogbanner',[BlogController::class,'editbanner']);

//Single blog create
Route::get('/create_blog',[SingleBlogController::class,'createblog']);
Route::POST('/create_blog',[SingleBlogController::class,'addblog']);
Route::get('/view_blog',[SingleBlogController::class,'displayblog']);
Route::get('/edit_blog/{id}',[SingleBlogController::class,'editblog']);
Route::post('/updateblog',[SingleBlogController::class,'updateblog']);
Route::get('del_blog/{id}',[SingleBlogController::class,'destroyblog']);
Route::get('/full_blog/{id}',[SingleBlogController::class,'showblog']);

//catagory
Route::get('/create_catagory',[SingleBlogController::class,'createcatagory']);
Route::POST('/create_catagory',[SingleBlogController::class,'addcatagory']);
Route::get('/view_catagory',[SingleBlogController::class,'displaycatagory']);
Route::get('/edit_catagory/{id}',[SingleBlogController::class,'editcatagory']);
Route::post('/updatecatagory',[SingleBlogController::class,'updatecatagory']);
Route::get('del_catagory/{id}',[SingleBlogController::class,'destroycatagory']);

//Contact banner
Route::get('/create_contactbanner',[Controller::class,'createbannersection']);
Route::post('/create_contactbanner',[Controller::class,'addbannersection']);
Route::get('/view_contactbanner',[Controller::class,'displaybannersection']);
Route::get('/edit_contactbanner',[Controller::class,'editbanner']);


Route::get('/add_contactsection2',[Controller::class,'displaycontactsection2']);
//contact Details
Route::get('/create_contactdetails',[Controller::class,'createdetailsection']);    
Route::post('/create_contactdetails',[Controller::class,'adddetailsection']);    
Route::get('/view_contactdetails',[Controller::class,'displaydetailsection']);    
Route::get('/edit_contactdetails/{id}',[Controller::class,'editdetailsection']);
Route::post('/updatecontactdetails',[Controller::class,'updatedetailsection']);
Route::get('del_contactdetails/{id}',[Controller::class,'destroydetail']);
