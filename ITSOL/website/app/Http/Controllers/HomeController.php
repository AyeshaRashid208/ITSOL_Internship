<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\HomeSecondSection;
use App\Models\HomeThirdSection;
use App\Models\HomeFourthSection;
use App\Models\HomeFifthSection;
use App\Models\HomeSixthSection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    public function addbanner(Request $request){
        $info = new Banner;
        $info->title=$request->title;
        $info->description=$request->description;
        $info->save();
        echo "Record inserted successfully.<br/>";
       

    }
   
    public function displaybanner(){
            
            return view('admin.home.banner');
    }

    public function displayhome2ndsection(){
            
        return view('admin.home.homesection2');
    }
    public function addhome2ndsection(Request $request){
        //$info = new banner;
        $info = new HomeSecondSection;
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
    
    public function displayhome3rdsection(){
            
        return view('admin.home.homesection3');
    }
    public function addhome3rdsection(Request $request){
        //$info = new banner;
        $info = new HomeThirdSection;
        $info->message=$request->message;
        $info->heading=$request->heading;
        $info->main_title=$request->main_title;
        $info->sub_title=$request->sub_title;
        $info->description=$request->description;
    
       $info->save();
    
          echo "Record inserted successfully.<br/>"; 

    }
    public function displayhome4rthsection(){
            
        return view('admin.home.homesection4');
    }
    public function addhome4rthsection(Request $request){
        //$info = new banner;
        $info = new HomeFourthSection;
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
       
        //$info->save(); 

    }
    public function displayhome5thsection(){
            
        return view('admin.home.homesection5');
    }
    public function addhome5thsection(Request $request){
        //$info = new banner;
        $info = new HomeFifthSection;
        $info->title=$request->title;
        $info->description=$request->description;
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
    public function displayhome6thsection(){
            
        return view('admin.home.homesection6');
    }
    public function addhome6thsection(Request $request){
        //$info = new banner;
        $info = new HomeSixthSection;
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
    public function viewhome(){
        $users = Banner::orderBy('id', 'DESC')->first();
        $second = HomeSecondSection::orderBy('id', 'DESC')->first();
        $third = HomeThirdSection::orderBy('id', 'DESC')->first();
        return view('index',['users'=>$users],['second'=>$second]); 
        }
}
