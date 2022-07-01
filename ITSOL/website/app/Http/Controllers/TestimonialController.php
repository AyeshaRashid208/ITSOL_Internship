<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialBanner;
use App\Models\TestimonialSecondSection;
use App\Models\TeamThirdSection;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TestimonialController extends Controller
{
    public function displaytestimonialbannersection(){
            
        return view('admin.Testimonial.testimonial_banner');
    }
    public function addbanner(Request $request){
        $info = new TestimonialBanner;
        $info->title=$request->title;
       
        $info->save();
        echo "Record inserted successfully.<br/>";
       

    }
    public function displaytestsecondsection(){
            
        return view('admin.Testimonial.testimonialsection2');
    }
    public function addtest2ndsection(Request $request){
        //$info = new banner;
        $info = new TestimonialSecondSection;
        $info->message=$request->message;
        $info->heading=$request->heading;
        $info->reviews=$request->reviews;
        $info->name=$request->name;
        $info->designation=$request->designation;
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/resource',$filename);
        $info->image = $filename;
       }
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function viewtest(){
       
        return View('testimonial')
        ->with('banner', TestimonialBanner::orderBy('id', 'DESC')->first())
        ->with('second', TestimonialSecondSection::orderBy('id', 'DESC')->first());
        
        
        }
    
}