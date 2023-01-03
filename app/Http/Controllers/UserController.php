<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Str;

class UserController extends Controller
{

    public function create(){
        return view('adduser');
    }
    
    public function store(Request $request){
        $request->validate([
            'profile_image'=>'required|mimes:jpg,png|max:2048'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make(Str::random(5));
        if($request->has('profile_image')){
            $file = $request->file('profile_image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/userImages',$fileName));
        }
        $user->image = $fileName;
        $user->save();
        if($user){
            return view('dashboard')->with('success','User Created Successfully');
        }
        else{
            return back()->with('error','User Not created');
        }
    }
    public function show(){
        $users = User::all();
        return view('userList',compact('users'));
    }
}
