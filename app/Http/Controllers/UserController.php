<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Str;

class UserController extends Controller
{
    // public function index(){
    //     dd("success");
    // }
    
    public function store(Request $request){
        $user = new User;
        $request->username = $user->name;
        $request->email = $user->email;
        $user->password = Hash::make(Str::random(10));
        if($user->file('profile_image')){
            $file = $request->file('profile_image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/userImages',$fileName));
        }
        $user->save();
        if($user){
            return back()->with('success','User Created Successfully');
        }
        else{
            return back()->with('error','User Not created');
        }
    }
}
