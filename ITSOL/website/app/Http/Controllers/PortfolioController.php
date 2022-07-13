<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioBanner;
use App\Models\PortfoliothrSecondSection;
use App\Models\ServiceThirdSection;
use App\Models\ServiceFourthSection;
use App\Models\PortfolioSecondSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PortfolioController extends Controller
{
    public function displayportfoliobannersection(){
            
        return view('admin.PortfolioSingle.portfolioBanner');
    }
    public function addbannersection(Request $request){
        //$info = new banner;
        $info = new PortFolioBanner;
        $info->title=$request->title;
        
       $info->save();
    
          echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function editport2ndsection(Request $request, $id){
        $info = PortfolioSecondSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.PortfolioSingle.editportsection2',['info'=>$info]);
       
    }
    public function displayportfoliosecondsection(){
        $info = PortfolioSecondSection::all();   
        return view('admin.PortfolioSingle.portsection2view', compact('info'));
    }
    public function createportfoliosecondsection(){
            
        return view('admin.PortfolioSingle.portfoliosection2');
    }
    public function addportfoliosecondsection(Request $request){
        //$info = new banner;
       
        $info = new PortfolioSecondSection;
       
        $info->title=$request->title;
        $info->description=$request->description;
        $info->catagory=$request->catagory;
        $info->client=$request->client;
        $info->date=$request->date;
        $info->website=$request->website;
        if($request->hasfile('image')){
            $destination = 'images/gallery'.$info->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/gallery',$filename);
            $info->image = $filename;
           }else{
            unset($info->image );
        }
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' );
       
        //$info->save(); 

    }
    public function updateport2ndsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = PortfolioSecondSection::find($request->id); 
        $request->validate([
            'title'    => 'required',
            'description'=> 'required',
            'catagory'=>'required',
            'client'=>'required',
            'date'=>'required',
            'image'=>'required',
            
        ]);
        $users->title=$request->title;
        $users->description=$request->description;
        $users->catagory=$request->catagory;
        $users->client=$request->client;
        $users->date=$request->date;
        $users->website=$request->website;
        if($request->hasfile('image')){
            $destination = 'images/gallery'.$users->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/gallery',$filename);
            $users->image = $filename;
           }else{
            unset($users->image );
        }
        $users->save();   
        $info = PortfolioSecondSection::all();   
        return view('admin.PortfolioSingle.portsection2view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
    public function destroysection2($id) {
        // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
        $max = DB::table('portfoliosecondsections')->max('id'); 
        DB::delete('delete from  portfoliosecondsections where id = ?',[$id]);
        DB::statement("ALTER TABLE portfoliosecondsections AUTO_INCREMENT =  $max");
        return redirect::back();
        
     }
    public function displayportfoliothirdsection(){
            
        return view('admin.PortfolioSingle.portfoliosection3');
    }
    public function displayportfoliofourthsection(){
            
        return view('admin.PortfolioSingle.portfoliosection4');
    }
    public function viewport(){
        $second = PortfolioSecondSection::all(); 
        return View('portfolio-single')
        ->with(compact('second'))
        ->with('banner', PortFolioBanner::orderBy('id', 'DESC')->first());
        
        }
   
}