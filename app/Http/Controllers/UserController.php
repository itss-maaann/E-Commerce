<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req){
        //dd($req);
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or Password does not Match";
        }
        else
        $req->session()->put('user', $user);
        //dd($req);
        return redirect('/');
    }

    public function deleteSessionData(Request $req) {
        $req->session()->forget('user');
        return redirect('login');
     }

     function signUp(Request $req)
     {
        $req->validate([
            'name'=>'required | max:15',
            'email'=>'required',
            'password'=>'required | min:5',
            'confirm_password'=>'required_with:password|same:password|min:6'
        ]);  
        dd($req);
         $signup = new User;

         $signup->name = $req->name;
         $signup->email = $req->email;
         $signup->password = Hash::make($req->password);
         $signup->save();

         return view('login');
     }
}
