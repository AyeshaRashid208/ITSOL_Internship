<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if($role=='1'){
            return view('admin');
        }
        if($role=='2'){
            return view('seller');
        }
        else{
             view('dashboard');
        }

    }
    public function addseller(Request $request){
        $data = new user;  //table name
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role='2';
        $data->save();
        return redirect()->back();

    }
}
