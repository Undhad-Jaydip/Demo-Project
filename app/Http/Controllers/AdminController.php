<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        return view('admin-login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('email','password');
        $admin = Admin::all();
        if($credentials['email'] == $admin[0]['email']  && $credentials['password'] == $admin[0]['password']){
            return view('dashboard')->with('success','Login Successfull');
            // dd("success");
            
        }
        else{
            return back()->with('error','Invalid Credential');
        }
    }
}
