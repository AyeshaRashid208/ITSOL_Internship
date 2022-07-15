<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceBanner;
use App\Models\ServiceSecondSection;
use App\Models\ServiceThirdSection;
use App\Models\ServiceFourthSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ServiceController extends Controller
{
    
    public function displayservicesbannersection(){
            
        return view('admin.Services.services_banner');
    }
    public function addservicebannersection(Request $request){
        //$info = new banner;
        $info = new ServiceBanner;
        $info->title=$request->title;
        
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function displayservice2ndsection(){
            
        return view('admin.Services.servicesection2');
    }
    public function addservice2ndsection(Request $request){
        //$info = new banner;
        $info = new ServiceSecondSection;
        $info->message=$request->message;
        $info->heading=$request->heading;
        $info->title=$request->title;
        $info->description=$request->description;
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/icons',$filename);
        $info->image = $filename;
       }
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
      
    }
    
    public function createservice4rthsection(){
            
        return view('admin.Services.servicesection4');
    }
    public function addservice4rthsection(Request $request){
        //$info = new banner;
        $info = new ServiceThirdSection;
        $info->name  =$request-> name;          
        $info->description=$request->description;
        $info->price=$request->price;
        $info->one=$request->one;
        $info->two=$request->two;
        $info->three=$request->three;
        $info->four=$request->four;
       $info->save();
       return redirect::back()->with('message', 'Record Added successfully' ); 

       
      
    }
    public function displayservice4rthsection(){
            
        $info = AboutFourthSection::all();   
        return view('admin.About.aboutsection4view', compact('info'));
    }
    
    public function viewservice(){
       
        return View('services')
        ->with('banner', ServiceBanner::orderBy('id', 'DESC')->first())
        ->with('second', ServiceSecondSection::orderBy('id', 'DESC')->first());
        
        }
   
}