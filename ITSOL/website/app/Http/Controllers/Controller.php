<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\AboutBanner;
use App\Models\AboutSecondSection;
use App\Models\AboutThirdSection;
use App\Models\AboutFourthSection;
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
    public function displayabout2ndsection(){
            
        return view('admin.About.aboutsection2');
    }
    public function addabout2ndsection(Request $request){
        //$info = new banner;
        $info = new AboutSecondSection;
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
    public function displayabout3rdsection(){
            
        return view('admin.About.aboutsection3');
    }
    public function addabout3rdsection(Request $request){
        //$info = new banner;
        $info = new AboutThirdSection;
        $info->heading=$request->heading;
        $info->main_title=$request->main_title;
    
        $info->description=$request->description;
    
       $info->save();
    
          echo "Record inserted successfully.<br/>"; 

    }
    public function displayabout4rthsection(){
            
        return view('admin.About.aboutsection4');
    }
    public function addabout4rthsection(Request $request){
        //$info = new banner;
        $info = new AboutFourthSection;
        $info->title=$request->title;
        $info->description=$request->description;
        $info->first_heading=$request->first_heading;
        $info->first_description=$request->first_description;
        $info->second_heading=$request->second_heading;
        $info->second_description=$request->second_description;
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
    public function displayteamaboutsection(){
            
        return view('admin.Team.teambanner');
    }
    public function displayteamsecondsection(){
            
        return view('admin.Team.teamsection2');
    }
    public function displayteamthirdsection(){
            
        return view('admin.Team.teamsection3');
    }
    public function displaytestimonialbannersection(){
            
        return view('admin.Testimonial.testimonial_banner');
    }
    public function displaytestsecondsection(){
            
        return view('admin.Testimonial.testimonialsection2');
    }
    public function displayservicesbannersection(){
            
        return view('admin.Services.services_banner');
    }
    public function displayservice2ndsection(){
            
        return view('admin.Services.servicesection2');
    }
    
    public function displayservice3rdsection(){
            
        return view('admin.Services.servicesection3');
    }
    public function displayportfolio3bannersection(){
            
        return view('admin.PortfolioThree.portfolio_banner');
    }
    public function displayportfolio3secondsection(){
            
        return view('admin.PortfolioThree.portfolio3section2');
    }
    public function displayportfolio3thirdsection(){
            
        return view('admin.PortfolioThree.portfolio3section3');
    }
    public function displayportfoliobannersection(){
            
        return view('admin.PortfolioSingle.portfolioBanner');
    }
    public function displayportfoliosecondsection(){
            
        return view('admin.PortfolioSingle.portfoliosection2');
    }
    public function displayportfoliothirdsection(){
            
        return view('admin.PortfolioSingle.portfoliosection3');
    }
    public function displayportfoliofourthsection(){
            
        return view('admin.PortfolioSingle.portfoliosection4');
    }
    public function displayblogbannersection(){
            
        return view('admin.BlogList.blog_banner');
    }
    public function displaybloglistsection2(){
            
        return view('admin.BlogList.bloglistsection2');
    }
    public function displaycontactbanner(){
            
        return view('admin.Contact.contact_banner');
    }
    public function displaycontactsection2(){
            
        return view('admin.Contact.contactsection2');
    }



}
