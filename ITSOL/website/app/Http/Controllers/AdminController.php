<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\admin;
use Session;
use Auth;

class AdminController extends Controller
{
    public function index(){
        
        return view ('admin.login');
    }
    public function makelogin(Request $request){
       
        $validator = Validator::make($request->all(),[
            'password' => 'required',
            'username' => 'required',
        ]);
        if($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        $data = array(
            'username' => $request->username,
            'password' => $request->password
        );
        if(Auth::guard('admin')->attempt($data)){
            return redirect('dashboard');
        }
        else{
            return back()->withErrors(['message'=>'invalid email or password']);
        }
       
}
public function dashboard(){
    return view('admin.dashboard');
}

}
