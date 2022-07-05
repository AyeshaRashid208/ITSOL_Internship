<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\HomeSecondSection;
use App\Models\HomeThirdSection;
use App\Models\HomeFourthSection;
use App\Models\HomeFifthSection;
use App\Models\HomeSixthSection;
use App\Models\HomeSevenSection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    public function addbanner(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        
        $info = new Banner;
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
        return View('admin.home.banner')
        ->with('users', Banner::orderBy('id', 'DESC')->first());
       

    }
    public function updatebanner(){
            
        return View('admin.home.banner')
        ->with('users', Banner::orderBy('id', 'DESC')->first());
    }
    public function editbanner(){
         
       // $info = Banner::find($id); 

       $users = Banner::orderBy('id', 'DESC')->first();
        return view('admin.home.editbanner',compact('users'));
    }

    public function displaybanner(){
            
            return view('admin.home.bannerview');
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
        $info->message  =$request->message;
        $info->main_title=$request->main_title;
        $info->tab_one_name=$request->tab_one_name;
        $info->tab_two_name=$request->tab_two_name;
        $info->tab_three_name=$request->tab_three_name;
        $info->tab_one_heading=$request->tab_one_heading;
        $info->tab_one_desc=$request->tab_one_desc;
        $info->tab_one_sub_heading_one=$request->tab_one_sub_heading_one;
        $info->tab_one_sub_heading_one_desc=$request->tab_one_sub_heading_one_desc;
        $info->tab_one_sub_heading_two=$request->tab_one_sub_heading_two;
        $info->tab_one_sub_heading_two_desc=$request->tab_one_sub_heading_two_desc;
        $info->tab_one_sub_heading_three=$request->tab_one_sub_heading_three;
        $info->tab_one_sub_heading_three_desc=$request->tab_one_sub_heading_three_desc;
        $info->tab_two_heading=$request->tab_two_heading;
        $info->tab_two_desc=$request->tab_two_desc;
        $info->tab_two_sub_heading_one=$request->tab_two_sub_heading_one;
        $info->tab_two_sub_heading_one_desc=$request->tab_two_sub_heading_one_desc;
        $info->tab_two_sub_heading_two=$request->tab_two_sub_heading_two;
        $info->tab_two_sub_heading_two_desc=$request->tab_two_sub_heading_two_desc;
        $info->tab_two_sub_heading_three=$request->tab_two_sub_heading_three;
        $info->tab_two_sub_heading_three_desc=$request->tab_two_sub_heading_three_desc;
        $info->tab_thr_heading=$request->tab_thr_heading;
        $info->tab_thr_desc=$request->tab_thr_desc;
        $info->tab_thr_sub_heading_one=$request->tab_thr_sub_heading_one;
        $info->tab_thr_sub_heading_one_desc=$request->tab_thr_sub_heading_one_desc;
        $info->tab_thr_sub_heading_two=$request->tab_thr_sub_heading_two;
        $info->tab_thr_sub_heading_two_desc=$request->tab_thr_sub_heading_two_desc;
        $info->tab_thr_sub_heading_three=$request->tab_thr_sub_heading_three;
        $info->tab_thr_sub_heading_three_desc=$request->tab_thr_sub_heading_three_desc;
        
    
       $info->save();
    
          echo "Record inserted successfully.<br/>"; 

    }
    public function displayhome4rthsection(){
            
        return view('admin.home.homesection4');
    }
    public function addhome4rthsection(Request $request){
        //$info = new banner;
        $info = new HomeFourthSection;
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
       
        //$info->save(); 

    }
    public function displayhome5thsection(){
            
        return view('admin.home.homesection5');
    }
    public function addhome5thsection(Request $request){
        //$info = new banner;
        $info = new HomeFifthSection;
        $info->message=$request->message;
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
    public function displayhome7thsection(){
            
        return view('admin.home.homesection7');
    }
    public function addhome7thsection(Request $request){
        //$info = new banner;
        $info = new HomeSevenSection;
        $info->message=$request->message;
        $info->heading=$request->heading;
        $info->title=$request->title;
        $info->name=$request->name;
        $info->time=$request->time;
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/resource',$filename);
        $info->image = $filename;
       }
       if($request->hasfile('author_image')){
        $file = $request->file('author_image');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/resource',$filename);
        $info->author_image = $filename;
       }
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function viewhome(){
       
        return View('index')
        ->with('users', Banner::orderBy('id', 'DESC')->first())
        ->with('second', HomeSecondSection::orderBy('id', 'DESC')->first())
        ->with('third', HomeThirdSection::orderBy('id', 'DESC')->first())
        ->with('fourth', HomeFourthSection::orderBy('id', 'DESC')->first())
        ->with('fifth', HomeFifthSection::orderBy('id', 'DESC')->first())
        ->with('sixth', HomeSixthSection::orderBy('id', 'DESC')->first())
        ->with('seven', HomeSevenSection::orderBy('id', 'DESC')->first());
        
        }
}
