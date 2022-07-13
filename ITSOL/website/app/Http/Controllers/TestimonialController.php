<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialBanner;
use App\Models\TestimonialSecondSection;
use App\Models\TeamThirdSection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use DB;
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
    public function createtestsecondsection(){
            
        return view('admin.Testimonial.testimonialsection2');
    }
    public function displaytestsecondsection(){
            
        $info = TestimonialSecondSection::all();   
        return view('admin.Testimonial.testimonialsection2view', compact('info'));
    }
    public function destroysection2($id) {
        // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
        $max = DB::table('testimonialsecondsections')->max('id'); 
        DB::delete('delete from  testimonialsecondsections where id = ?',[$id]);
        DB::statement("ALTER TABLE testimonialsecondsections AUTO_INCREMENT =  $max");
        return redirect::back();
        
     }
     public function edittest2ndsection(Request $request, $id){
        $info = TestimonialSecondSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.Testimonial.edittestsection2',['info'=>$info]);
       
    }
    public function addtest2ndsection(Request $request){
        //$info = new banner;
        $info = new TestimonialSecondSection;
       
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


    }
    public function updatetest2ndsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = TestimonialSecondSection::find($request->id); 
        
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
        $info = TestimonialSecondSection::all();   
        return view('admin.Testimonial.testimonialsection2view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
    public function viewtest(){
        $second = TestimonialSecondSection::all(); 
        return View('testimonial')
        ->with('banner', TestimonialBanner::orderBy('id', 'DESC')->first())
        ->with(compact('second'));
        
        
        }
    
}