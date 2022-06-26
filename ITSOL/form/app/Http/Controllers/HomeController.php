<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Mail;
class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function upload(Request $request){
        $info = new contact;
        $info->size=$request->size;
        $info->prescription=$request->prescription;
        $info->name=$request->name;
        $info->phone=$request->phone;
        $info->choice=$request->choice;
        $info->time=$request->time;
        $info->payment=$request->payment;
        $info->date=$request->date;
        $info->email=$request->email;
        $info->save();
        \Mail::send('contact',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('phone'),
                 'prescription' => $request->get('prescription'),
                 'choice' => $request->get('choice'),
                 'time' => $request->get('time'),
                 'payment' => $request->get('payment'),
                 'date' => $request->get('date'),
                 'size' => $request->get('size'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('bssef19m531@gmail.com');
               });
        //return redirect()->back()->with(['success' => 'Thank you for contacting us. we will contact you shortly.']);
        return redirect()->with('success', 'Thanks for your order!');

        
        
    }
}
