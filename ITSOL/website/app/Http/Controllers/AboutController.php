<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use DB;
use App\Models\AboutBanner;
use App\Models\AboutSecondSection;
use App\Models\AboutThirdSection;
use App\Models\AboutFourthSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function displayaboutbannersection(){
            
        return view('admin.About.about_banner');
    }
    public function addaboutbannersection(Request $request){
        //$info = new banner;
        $info = new AboutBanner;
        $info->title=$request->title;
        
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function createabout2ndsection(){
        
        return view('admin.About.aboutsection2');
    }
    public function displayabout2ndsection(){
            
        $info = AboutSecondSection::all();   
        return view('admin.About.aboutsection2view', compact('info'));
    }
    public function editabout2ndsection(Request $request, $id){
        $info = AboutSecondSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.About.editaboutsection2',['info'=>$info]);
       
    }
    public function addabout2ndsection(Request $request){
        //$info = new banner;
        $info = new AboutSecondSection;
        $info->title=$request->title;
        $info->description=$request->description;
        $info->image=$request->image;
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' ); 

       
        //$info->save(); 

    }
    public function updateabout2ndsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = AboutSecondSection::find($request->id); 
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            
        ]);
        $users->title=$request->title;
        $users->description=$request->description;
       $users->image=$request->image;
        $users->save();   
        $info = AboutSecondSection::all();   
        return view('admin.About.aboutsection2view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
  public function destroysection2($id) {
    // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
    $max = DB::table('aboutsecondsections')->max('id'); 
    DB::delete('delete from  aboutsecondsections where id = ?',[$id]);
    DB::statement("ALTER TABLE aboutsecondsections AUTO_INCREMENT =  $max");
    return redirect::back();
    
 }
    public function displayabout3rdsection(){
            
        return view('admin.About.aboutsection3');
    }
    public function addabout3rdsection(Request $request){
        //$info = new banner;
        $info = new AboutThirdSection;
        $info->message=$request->message;
        $info->heading=$request->heading;
        $info->main_title=$request->main_title;
        $info->description=$request->description;
        $info->skill_one=$request->skill_one;
        $info->skill_two=$request->skill_two;
        $info->skill_three=$request->skill_three;
    
       $info->save();
    
          echo "Record inserted successfully.<br/>"; 

    }
    public function displayabout4rthsection(){
            
        return view('admin.About.aboutsection4');
    }
    public function addabout4rthsection(Request $request){
        //$info = new banner;
        $info = new AboutFourthSection;
        $info->message=$request->message;
        $info->title=$request->title;
        $info->description=$request->description;
        $info->first_heading=$request->first_heading;
        $info->first_description=$request->first_description;
        $info->second_heading=$request->second_heading;
        $info->second_description=$request->second_description;
        $info->third_heading=$request->third_heading;
        $info->third_description=$request->third_description;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/resource',$filename);
            $info->image = $filename;
           }
    
       $info->save();
    
          echo "Record inserted successfully.<br/>"; 

    }
    public function viewabout(){
        $second = AboutSecondSection::all(); 
        // dd($second); 
        return View('about')
        ->with('banner', AboutBanner::orderBy('id', 'DESC')->first())
        ->with(compact('second'))
        ->with('third', AboutThirdSection::orderBy('id', 'DESC')->first())
        ->with('fourth', AboutFourthSection::orderBy('id', 'DESC')->first());
        
        
        }

}