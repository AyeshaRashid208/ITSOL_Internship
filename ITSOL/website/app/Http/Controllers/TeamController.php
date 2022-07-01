<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamBanner;
use App\Models\TeamSecondSection;
use App\Models\TeamThirdSection;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TeamController extends Controller
{
    public function displayteamaboutsection(){
            
        return view('admin.Team.teambanner');
    }
    public function addteambannersection(Request $request){
        //$info = new banner;
        $info = new TeamBanner;
        $info->title=$request->title;
        
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }

    public function displayteamsecondsection(){
            
        return view('admin.Team.teamsection2');
    }
    public function addteam2ndsection(Request $request){
        //$info = new banner;
        $info = new TeamSecondSection;
        $info->message=$request->message;
        $info->heading=$request->heading;
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
    public function displayteamthirdsection(){
            
        return view('admin.Team.teamsection3');
    }
    public function addteam3rdsection(Request $request){
        //$info = new banner;
        $info = new TeamThirdSection;
        $info->message=$request->message;
        $info->heading=$request->heading;
        $info->description =$request->description;
        
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function viewteam(){
       
        return View('team')
        ->with('banner', TeamBanner::orderBy('id', 'DESC')->first())
        ->with('second', TeamSecondSection::orderBy('id', 'DESC')->first())
        ->with('third', TeamThirdSection::orderBy('id', 'DESC')->first());
        
        }
   
}