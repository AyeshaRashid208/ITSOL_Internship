<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioBanner;
use App\Models\BlogSecondSection;
use App\Models\BlogListBanner;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BlogController extends Controller
{
    public function createbannersection(){
        
        return view('admin.BlogList.bloglist_banner');
    }
    public function displaybannersection(){
            
        // $info = AboutBanner::all();   
        return view('admin.BlogList.blog_listbannerview')
        ->with('info', BlogListBanner::orderBy('id', 'DESC')->first());;
    }
    public function addbannersection(Request $request){
        //$info = new banner;
        $info = new BlogListBanner;
        $info->title=$request->title;
        
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' ); 

    }
    public function editbanner(){
        

       return view('admin.BlogList.editbloglistbanner')
       ->with('users', BlogListBanner::orderBy('id', 'DESC')->first());
   }

   


    public function createblogsecondsection(){
            
        return view('admin.BlogList.bloglistsection2');
    }
    public function addblogsecondsection(Request $request){
            
        $info = new BlogSecondSection;
       
        $info->title=$request->title;
        $info->description=$request->description;
        $info->name=$request->name;
        $info->date=$request->date;
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
    
       return redirect::back()->with('message', 'Record Added successfully' );
    }
    public function displayblogsecondsection(){
        $info = BlogSecondSection::all();   
        return view('admin.BlogList.bloglistsection2view', compact('info'));
    }
    public function editblog2ndsection(Request $request, $id){
        $info = BlogSecondSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.BlogList.editblogsection2',['info'=>$info]);
       
    }
    public function updateblog2ndsection(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = BlogSecondSection::find($request->id); 
        $request->validate([
            'title'    => 'required',
            'description'=> 'required',
            'name'=>'required',
            'date'=>'required',
            'image'=>'required',
            
        ]);
        $users->title=$request->title;
        $users->description=$request->description;
        $users->name=$request->name;
        
        $users->date=$request->date;
       
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
        $info = BlogSecondSection::all();   
        return view('admin.BlogList.bloglistsection2view', compact('info'));
  }
  public function destroysection2($id) {
    $max = DB::table('blogsecondsections')->max('id'); 
    DB::delete('delete from  blogsecondsections where id = ?',[$id]);
    DB::statement("ALTER TABLE blogsecondsections AUTO_INCREMENT =  $max");
    return redirect::back();
    
   }

   public function createblogthirdsection(){
            
    return view('admin.BlogList.bloglistsection3');
}
public function addblogthirdsection(Request $request){
            
    $info = new BlogThirdSection;
   
    
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
}
public function displayblogthirdsection(){
    $info = BlogThirdSection::all();   
    return view('admin.BlogList.bloglistsection3view', compact('info'));
}
public function editblog3rdsection(Request $request, $id){
    $info = BlogThirdSection::find($id);
    // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
    return view('admin.BlogList.editblogsection3',['info'=>$info]);
   
}
public function updateblog3rdsection(Request $request){
    //$info = HomeSecondSection::find($request);
   // return $request->input();
    $users = BlogThirdSection::find($request->id); 
    $request->validate([
       
        'image'=>'required',
        
    ]);
   
   
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
    $info = BlogThirdSection::all();   
    return view('admin.BlogList.bloglistsection3view', compact('info'));
}

    public function viewblog()
    {
    $second = BlogSecondSection::all(); 
   
    return View('blog-list')
    ->with(compact('second'))
    ->with('banner', BlogListBanner::orderBy('id', 'DESC')->first());
    
    }


}
