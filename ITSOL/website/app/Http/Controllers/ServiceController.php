<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceBanner;
use App\Models\ServiceSecondSection;
use App\Models\ServiceThirdSection;
use App\Models\ServiceFourthSection;
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
    
    public function displayservice3rdsection(){
            
        return view('admin.Services.servicesection3');
    }
    public function addservice3rdsection(Request $request){
        //$info = new banner;
        $info = new ServiceThirdSection;
        $info->message  =$request-> message;          
        $info->heading=$request->heading;
        $info->tab_one_name=$request->tab_one_name;
        $info->plan_one_heading=$request->plan_one_heading;
        $info->plan_one_desc=$request->plan_one_desc;
        $info->price_one =$request->price_one;
        $info->feature_one=$request->feature_one;
        $info->feature_two=$request->feature_two;
        $info->feature_thr=$request->feature_thr;
        $info->feature_four=$request->feature_four;
        $info->recom=$request->recom;
        $info->plan_two_heading=$request->plan_two_heading;
        $info->plan_two_desc=$request->plan_two_desc;
        $info->price_two=$request->price_two;
        $info->P_feature_one=$request->P_feature_one;
        $info->P_feature_two=$request->P_feature_two;
        $info->P_feature_thr=$request->P_feature_thr;
        $info->P_feature_four=$request->P_feature_four;
        $info->plan_thr_heading=$request->plan_thr_heading;
        $info->plan_thr_desc=$request->plan_thr_desc;
        $info->price_thr=$request->price_thr;
        $info->Pt_feature_one=$request->Pt_feature_one;
        $info->Pt_feature_two=$request->Pt_feature_two;
        $info->Pt_feature_thr=$request->Pt_feature_thr;
        $info->Pt_feature_four=$request->Pt_feature_four;
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
      
    }
    public function displayservice4rthsection(){
            
        return view('admin.Services.servicesection4');
    }
    public function addservice4rthsection(Request $request){
        //$info = new banner;
        $info = new ServiceFourthSection;
        $info->tab_two_name=$request->tab_two_name;
        $info->plan_one_heading=$request->plan_one_heading;
        $info->plan_one_desc=$request->plan_one_desc;
        $info->price_one =$request->price_one;
        $info->feature_one=$request->feature_one;
        $info->feature_two=$request->feature_two;
        $info->feature_thr=$request->feature_thr;
        $info->feature_four=$request->feature_four;
        $info->recom=$request->recom;
        $info->plan_two_heading=$request->plan_two_heading;
        $info->plan_two_desc=$request->plan_two_desc;
        $info->price_two=$request->price_two;
        $info->P_feature_one=$request->P_feature_one;
        $info->P_feature_two=$request->P_feature_two;
        $info->P_feature_thr=$request->P_feature_thr;
        $info->P_feature_four=$request->P_feature_four;
        $info->plan_thr_heading=$request->plan_thr_heading;
        $info->plan_thr_desc=$request->plan_thr_desc;
        $info->price_thr=$request->price_thr;
        $info->Pt_feature_one=$request->Pt_feature_one;
        $info->Pt_feature_two=$request->Pt_feature_two;
        $info->Pt_feature_thr=$request->Pt_feature_thr;
        $info->Pt_feature_four=$request->Pt_feature_four;
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
      
    }
    public function viewservice(){
       
        return View('services')
        ->with('banner', ServiceBanner::orderBy('id', 'DESC')->first())
        ->with('second', ServiceSecondSection::orderBy('id', 'DESC')->first())
        ->with('third', ServiceThirdSection::orderBy('id', 'DESC')->first())
        ->with('fourth', ServiceFourthSection::orderBy('id', 'DESC')->first());
        
        }
   
}