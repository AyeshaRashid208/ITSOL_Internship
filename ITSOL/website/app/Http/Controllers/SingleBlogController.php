<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use App\Models\BlogSingle;
use App\Models\BlogSecondSection;
use App\Models\BlogListBanner;
use App\Models\BlogCatagory;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class SingleBlogController extends Controller
{
    public function createblog(){
        
        return view('admin.BlogSingle.blog');
    } 
    public function createcatagory(){
        
        return view('admin.BlogSingle.catagory');
    } 
    public function addcatagory(Request $request){
        //$info = new banner;
        $info = new BlogCatagory;
        $info->catagory=$request->catagory;
        
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' ); 

    }
    public function addblog(Request $request){
        // $input=$request->all();
        // dd($input);
        $info = new BlogSingle;
      
        $info->date=$request->date;
        $info->name=$request->name;
        $info->title=$request->title;
        // dd($info->date);
        $info->one=$request->one;
        $info->two=$request->two;
        $info->heading=$request->heading;
        $info->three=$request->three;
        $info->quote=$request->quote;
        $info->catagory=implode(',', $request->catagory);
        // dd($info->catagory);
       
        $info->tag_one=$request->tag_one;
        $info->tag_two=$request->tag_two;
        $info->tag_three=$request->tag_three;
        $info->tag_four=$request->tag_four;
        
       if($request->hasfile('fimage')){
        $file = $request->file('fimage');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/resource',$filename);
        $info->fimage = $filename;
       }
       if($request->hasfile('image_one')){
        $file = $request->file('image_one');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/resource',$filename);
        $info->image_one = $filename;
       }
       if($request->hasfile('image_two')){
        $file = $request->file('image_two');
        $extension = $file->getClientOriginalName();
        $filename=time().'.'.$extension;
        $file->move('images/resource',$filename);
        $info->image_two = $filename;
       }
       $info->save();
    
       return redirect::back()->with('message', 'Record Added successfully' );     
   
    }  
    public function displayblog(){
            
        $info = BlogSingle::all();   
        return view('admin.BlogSingle.blogview', compact('info'));
    }
    public function displaycatagory(){
            
        $info = BlogCatagory::all();   
        
        return view('admin.BlogSingle.catagoryview', compact('info'));
    }
    public function editblog(Request $request, $id){
        $info = BlogSingle::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.BlogSingle.editblog',['info'=>$info]);
       
    }
    public function editcatagory(Request $request, $id){
        $info = BlogCatagory::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.BlogSingle.editcatagory',['info'=>$info]);
       
    }
    public function updateblog(Request $request){
        //$info = HomeSecondSection::find($request);
       // return $request->input();
        $users = BlogSingle::find($request->id); 
        $request->validate([
            'date'    => 'required',
            'name'    => 'required',
            'title'    => 'required',
            'fimage'=> 'required',
            'catagory'=>'required',
            'tag_one'=>'required',
           
            
        ]);
        $users->date=$request->date;
        $users->name=$request->name;
        $users->title=$request->title;       
        $users->one=$request->one;
        $users->two=$request->two;
        $users->heading=$request->heading;
        $users->three=$request->three;
        $users->quote=$request->quote;
        $users->catagory= $request->catagory;    
        $users->tag_one=$request->tag_one;
        $users->tag_two=$request->tag_two;
        $users->tag_three=$request->tag_three;
        $users->tag_four=$request->tag_four;
        if($request->hasfile('fimage')){
            $destination = 'images/resource'.$users->fimage;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('fimage');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/resource',$filename);
            $users->fimage = $filename;
           }else{
            unset($users->fimage );
        }
        if($request->hasfile('image_one')){
            $destination = 'images/resource'.$users->image_one;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image_one');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/resource',$filename);
            $users->image_one = $filename;
           }else{
            unset($users->image_one );
        }
        if($request->hasfile('image_two')){
            $destination = 'images/resource'.$users->image_two;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image_two');
            $extension = $file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file->move('images/resource',$filename);
            $users->image_two = $filename;
           }else{
            unset($users->image_two );
        }
        $users->save();   
        $info = BlogSingle::all();   
        return view('admin.BlogSingle.blogview', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
  }
  public function updatecatagory(Request $request){
  
    $users = BlogCatagory::find($request->id); 
    $request->validate([
        'catagory' => 'required',
      
        
    ]);
    $users->catagory=$request->catagory;
    
    $users->save();   
    $info = BlogCatagory::all();   
    return view('admin.BlogSingle.catagoryview', compact('info'));
}
public function destroyblog($id) {
    // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
    $max = DB::table('blogs')->max('id'); 
    DB::delete('delete from  blogs where id = ?',[$id]);
    DB::statement("ALTER TABLE blogs AUTO_INCREMENT =  $max");
    return redirect::back();
    
 }
 public function destroycatagory($id) {
    // DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT = $id;"); 
    $max = DB::table('catagorys')->max('id'); 
    DB::delete('delete from  catagorys where id = ?',[$id]);
    DB::statement("ALTER TABLE catagorys AUTO_INCREMENT =  $max");
    return redirect::back();
    
 }
    public function viewblog(){
    $second = BlogSingle::Paginate(1); 

    $third=BlogCatagory::all();   
    // dd($third);
    return View('blog-single')
    ->with(compact('second'))
    ->with(compact('third'));
    
    }
    public function showblog(Request $request, $id){
        //  $second = BlogSingle::all(); 
        // $second = BlogSingle::find($id);        
        // return View('blog-single')->with(compact('second'));
        $i = BlogSingle::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('blog_single',['i'=>$i]);
        
        }
    public function viewbloglist(){
        $second = BlogSingle::all(); 
        // dd($second[0]->id);
        return View('blog-list')
        ->with(compact('second'))
        ->with('banner', BlogListBanner::orderBy('id', 'DESC')->first());
        
    }
       
}