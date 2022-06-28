<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Banner;
use App\Models\HomeSecondSection;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function upload(Request $request){
        $info = new user;
        $info->firstname=$request->firstname;
        $info->subject=$request->subject;
        $info->message=$request->message;
        $info->email=$request->email;
        $info->save();
        \Mail::send('message',
             array(
                 'Name' => $request->get('firstname'),
                 'Email' => $request->get('email'),
                 'Subject' => $request->get('subject'),
                 'Message' => $request->get('message'),
                 
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('rashidayesha208@gmail.com');
               });
       return redirect()->back()->with('success', 'Thanks for contacting us');
       //return redirect('/home')->with('message' => 'My message');
        
        
    }
    public function addbanner(Request $request){
        //$info = new banner;
        $title=$request->input('title');
        
        $description=$request->input('description');
        $data=array('title'=>$title,"description"=>$description);
        DB::table('banners')->insert($data);
        echo "Record inserted successfully.<br/>";
       
        //$info->save(); 

    }
    public function viewbanner(){
        $users = DB::select('select * from banners');
        return view('index',['users'=>$users]);
        }
    public function displaybanner(){
            
            return view('admin.home.banner');
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
       
        //$info->save(); 

    }
    public function displayhome3rdsection(){
            
        return view('admin.home.homesection3');
    }
    public function displayhome4rthsection(){
            
        return view('admin.home.homesection4');
    }
    public function displayhome5thsection(){
            
        return view('admin.home.homesection5');
    }
    public function displayhome6thsection(){
            
        return view('admin.home.homesection6');
    }
    public function displayaboutbannersection(){
            
        return view('admin.About.about_banner');
    }
    public function displayabout2ndsection(){
            
        return view('admin.About.aboutsection2');
    }
    public function displayabout3rdsection(){
            
        return view('admin.About.aboutsection3');
    }
    public function displayabout4rthsection(){
            
        return view('admin.About.aboutsection4');
    }


}
