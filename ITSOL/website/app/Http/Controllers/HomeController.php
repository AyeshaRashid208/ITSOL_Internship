<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use App\Models\Banner;
use DB;
use App\Models\HomeSecondSection;
use App\Models\HomeThirdSection;
use App\Models\HomeFourthSection;
use App\Models\HomeFifthSection;
use App\Models\HomeSixthSection;
use App\Models\HomeSevenSection;
use App\Models\HomeEightSection;
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
        return view('admin.home.banner')
        ->with('users', Banner::orderBy('id', 'DESC')->first());

    }

    public function updatebanner(Request $request, $id){
        $users = Banner::find($id); 
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $users->title=$request->input('title');
        $users->description=$request->input('description');
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
           }
           $users->update();   
        return view('admin.home.banner')
        ->with('users', Banner::orderBy('id', 'DESC')->first());
    }
    public function editbanner(){
         //$users = Banner::find($id); 

        return view('admin.home.editbanner')
        ->with('users', Banner::orderBy('id', 'DESC')->first());
    }

    public function displaybanner(){
            
        return view('admin.home.banner')
        ->with('users', Banner::orderBy('id', 'DESC')->first());

    }

    public function createbanner(){
            
        return View('admin.home.bannerview');
    }


    //home section 2
    public function displayhome2ndsection(){
        $info = HomeSecondSection::all();   
        return view('admin.home.homesection2view', compact('info'));
    }
    public function createhome2ndsection(){
        
        return view('admin.home.homesection2');
    }
    public function updatehome2ndsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = HomeSecondSection::find($request->id); 
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
            
        ]);
        $users->title=$request->title;
        $users->description=$request->description;
       $users->icon=$request->icon;
        $users->save();   
        $info = HomeSecondSection::all();   
        return view('admin.home.homesection2view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
    public function addhome2ndsection(Request $request){
        //$info = new banner;
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        $info = new HomeSecondSection;
        $info->title=$request->title;
        $info->description=$request->description;
       $info->icon=$request->icon;
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' );

    }
    public function edithome2ndsection(Request $request, $id){
        $info = HomeSecondSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.home.edithomesection2',['info'=>$info]);
       
    }
    public function destroy($id) {
        // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
        $max = DB::table('homesecondsections')->max('id'); 
        DB::delete('delete from  homesecondsections where id = ?',[$id]);
        DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT =  $max");
        return redirect::back();
        
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

    //4rth section

    public function createhome4rthsection(){
            
        return view('admin.home.homesection4');
    }
    public function displayhome4rthsection(){
            
        $info = HomeFourthSection::all();   
        return view('admin.home.homesection4view', compact('info'));
    }
    public function edithome4rthsection($id){
            
        $info = HomeFourthSection::find($id);
        return view('admin.home.edithomesection4',['info'=>$info]);
    }
    public function addhome4rthsection(Request $request){
        //$info = new banner;
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
            
        ]);
        $info = new HomeFourthSection;
        $info->icon=$request->icon;
        $info->title=$request->title;
        $info->description=$request->description;
       
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' );
       
        //$info->save(); 

    }
    public function updatehome4rthsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = HomeFourthSection::find($request->id); 
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
            
        ]);
        $users->title=$request->title;
        $users->description=$request->description;
       $users->icon=$request->icon;
        $users->save();   
        $info = HomeFourthSection::all();   
        return view('admin.home.homesection4view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
  public function destroysection4($id) {
    // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
    $max = DB::table('homefourthsections')->max('id'); 
    DB::delete('delete from  homefourthsections where id = ?',[$id]);
    DB::statement("ALTER TABLE homefourthsections AUTO_INCREMENT =  $max");
    return redirect::back();
    
 }

 //fifth section

    public function createhome5thsection(){
            
        return view('admin.home.homesection5');
    }
    public function displayhome5thsection(){
        $info = HomeFifthSection::all();   
        return view('admin.home.homesection5view', compact('info'));
    }
    public function edithome5thsection(Request $request, $id){
        $info = HomeFifthSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.home.edithomesection5',['info'=>$info]);
       
    }
    public function addhome5thsection(Request $request){
        //$info = new banner;
        $info = new HomeFifthSection;
        $request->validate([
            'image' => 'required',
            
        ]);
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/resource',$filename);
        $info->image = $filename;
       }
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' );
 

    }
    public function updatehome5thsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $info = HomeFifthSection::find($request->id); 
        $request->validate([
            'image' => 'required',
            
            
        ]);
        if($request->hasfile('image')){
            $destination = 'images/resource'.$info->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/resource',$filename);
            $info->image = $filename;
           }else{
            unset($info->image );
        }
        $info->save();   
        $info = HomeFifthSection::all();   
        return view('admin.home.homesection5view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
  public function destroysection5($id) {
    // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
    $max = DB::table('homefifthsections')->max('id'); 
    DB::delete('delete from  homefifthsections where id = ?',[$id]);
    DB::statement("ALTER TABLE homefifthsections AUTO_INCREMENT =  $max");
    return redirect::back();
    
   }


    public function createhome6thsection(){
            
        return view('admin.home.homesection6');
    }
    public function edithome6thsection(Request $request, $id){
        $info = HomesixthSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.home.edithomesection6',['info'=>$info]);
       
    }
    public function updatehome6thsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = HomeSixthSection::find($request->id); 
        
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'reviews' => 'required',
            
        ]);
        
        $users->name=$request->name;
        $users->designation=$request->designation;
       $users->reviews=$request->reviews;
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
        $info = HomeSixthSection::all();   
        return view('admin.home.homesection6view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }

    public function displayhome6thsection(){
        $info = HomeSixthSection::all();   
        return view('admin.home.homesection6view', compact('info'));
    }
    public function addhome6thsection(Request $request){
        //$info = new banner;
        $info = new HomeSixthSection;
        
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
    
        
       return redirect::back()->with('message', 'Record Added successfully' );
       
        //$info->save(); 

    }
    public function destroysection6($id) {
        // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
        $max = DB::table('homesixthsections')->max('id'); 
        DB::delete('delete from  homesixthsections where id = ?',[$id]);
        DB::statement("ALTER TABLE homesixthsections AUTO_INCREMENT =  $max");
        return redirect::back();
        
       }

    public function createhome8thsection(){
            
        return view('admin.home.homesection8');
    }
    public function addhome8thsection(Request $request){
        //$info = new banner;
        $info = new HomeEightSection;
        $request->validate([
            'image' => 'required',
            
        ]);
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/clients',$filename);
        $info->image = $filename;
       }
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' );
 

    }
    public function displayhome8thsection(){
        $info = HomeEightSection::all();   
        return view('admin.home.homesection8view', compact('info'));
    }
    public function edithome8thsection(Request $request, $id){
        $info = HomeEightSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.home.edithomesection8',['info'=>$info]);
       
    }
    public function updatehome8thsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $info = HomeEightSection::find($request->id); 
        $request->validate([
            'image' => 'required',  
        ]);
        if($request->hasfile('image')){
            $destination = 'images/clients'.$info->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/clients',$filename);
            $info->image = $filename;
           }else{
            unset($info->image );
        }
        $info->save();   
        $info = HomeEightSection::all();   
        return view('admin.home.homesection8view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
  public function destroysection8($id) {
    // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
    $max = DB::table('homeeightsections')->max('id'); 
    DB::delete('delete from  homeeightsections where id = ?',[$id]);
    DB::statement("ALTER TABLE homeeightsections AUTO_INCREMENT =  $max");
    return redirect::back();
    
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
        $second = HomeSecondSection::all();   
        $fourth = HomeFourthSection::all(); 
        $fifth = HomeFifthSection::all();   
        $sixth = HomeSixthSection::all(); 
        $eight = HomeEightSection::all();   
        return View('index')
        ->with('users', Banner::orderBy('id', 'DESC')->first())
        ->with(compact('second'))
        ->with('third', HomeThirdSection::orderBy('id', 'DESC')->first())
        ->with(compact('fourth'))
        ->with(compact('fifth'))
        ->with(compact('sixth'))
        ->with(compact('eight'))
        ->with('seven', HomeSevenSection::orderBy('id', 'DESC')->first());
        
        }
}
