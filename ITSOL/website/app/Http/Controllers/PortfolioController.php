<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioBanner;
use App\Models\PortfoliothrSecondSection;
use App\Models\ServiceThirdSection;
use App\Models\ServiceFourthSection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PortfolioController extends Controller
{
    public function displayportfoliobannersection(){
            
        return view('admin.PortfolioSingle.portfolioBanner');
    }
    public function addbannersection(Request $request){
        //$info = new banner;
        $info = new PortFolioBanner;
        $info->title=$request->title;
        
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function displayportfoliosecondsection(){
            
        return view('admin.PortfolioSingle.portfoliosection2');
    }
    public function displayportfoliothirdsection(){
            
        return view('admin.PortfolioSingle.portfoliosection3');
    }
    public function displayportfoliofourthsection(){
            
        return view('admin.PortfolioSingle.portfoliosection4');
    }
    public function viewport(){
       
        return View('portfolio-single')
        ->with('banner', PortFolioBanner::orderBy('id', 'DESC')->first());
        
        }
   
}