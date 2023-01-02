<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(){
        return view('adduser');
    }
    
    public function store(Request $request){
        $user = new User;
        $request->username = $user->name;
        $request->email = $user->email;
        $request->password = $user->password;
        $user->save();
        if($user){
            return back()->with('success','User Created Successfully');
        }
        else{
            return back()->with('error','User Not created');
        }
    }
}
