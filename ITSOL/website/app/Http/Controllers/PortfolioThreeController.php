<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioThreeBanner;
use App\Models\PortfoliothrSecondSection;
use App\Models\ServiceThirdSection;
use App\Models\ServiceFourthSection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PortfolioThreeController extends Controller
{
    
    public function displayportfolio3bannersection(){
            
        return view('admin.PortfolioThree.portfolio_banner');
    }
    public function addbannersection(Request $request){
        //$info = new banner;
        $info = new PortFolioThreeBanner;
        $info->title=$request->title;
        
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function displayportfolio3secondsection(){
            
        return view('admin.PortfolioThree.portfolio3section2');
    }
    public function addportfoliothrsecondsection(Request $request){
        //$info = new banner;
        $info = new PortfoliothrSecondSection;
        $info->message=$request->message;
        $info->heading=$request->heading;
        $info->title=$request->title;
        $info->description=$request->description;
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/gallery',$filename);
        $info->image = $filename;
       }
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
    }
    public function displayportfolio3thirdsection(){
            
        return view('admin.PortfolioThree.portfolio3section3');
    }
    public function viewport(){
       
        return View('portfolio-3-column')
        ->with('banner', PortFolioThreeBanner::orderBy('id', 'DESC')->first());
        
        }
   
}