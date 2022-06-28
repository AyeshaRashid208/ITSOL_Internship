<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Banner;
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
            
            return view('admin.banner');
    }
    public function displayhome2ndsection(){
            
        return view('admin.homesection2');
    }
    public function displayhome3rdsection(){
            
        return view('admin.homesection3');
    }
    public function displayhome4rthsection(){
            
        return view('admin.homesection4');
    }
    public function displayhome5thsection(){
            
        return view('admin.homesection5');
    }
    public function displayhome6thsection(){
            
        return view('admin.homesection6');
    }

}
