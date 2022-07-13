<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamBanner;
use App\Models\TeamSecondSection;
use App\Models\TeamThirdSection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use App\Models\HomeEightSection;
use DB;
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

    public function displayteam2ndsection(){
        
        $info = TeamSecondSection::all();   
        return view('admin.Team.teamsection2view', compact('info'));
    }
    public function createteamsecondsection(){
            
        return view('admin.Team.teamsection2');
    }
    public function addteam2ndsection(Request $request){
        //$info = new banner;
        $info = new TeamSecondSection;

        
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
    
       return redirect::back()->with('message', 'Record Added successfully' ); 
       
        //$info->save(); 

    }
    public function editteam2ndsection(Request $request, $id){
        $info = TeamSecondSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.Team.editteamsection2',['info'=>$info]);
       
    }
    public function updateteam2ndsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = TeamSecondSection::find($request->id); 
        
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'designation' => 'required',
            
            
        ]);
        
        $users->name=$request->name;
        $users->designation=$request->designation;
       
        if($request->hasfile('image')){
            $destination = 'images/resource'.$users->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/resource',$filename);
            $users->image = $filename;
           }else{
            unset($users->image );
        }
        $users->save();   
        $info = TeamSecondSection::all();   
        return view('admin.Team.teamsection2view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
  public function destroysection2($id) {
    // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
    $max = DB::table('teamsecondsections')->max('id'); 
    DB::delete('delete from  teamsecondsections where id = ?',[$id]);
    DB::statement("ALTER TABLE teamsecondsections AUTO_INCREMENT =  $max");
    return redirect::back();
    
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
        $second = TeamSecondSection::all(); 
        $third=HomeEightSection::all();   
        //  dd($third);
        return View('team')
      
        ->with('banner', TeamBanner::orderBy('id', 'DESC')->first())
        ->with(compact('second'))
        
        ->with(compact('third'));
        
        }
   
}