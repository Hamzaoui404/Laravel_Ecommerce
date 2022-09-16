<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    function login(Request $req){
         $user = User::where(["email"=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return 'user name or password incorrect';
        }
        else {
            $req->session()->put('user',$user);
            return redirect ('/');
        }
    }
    function register(Request $req){
        $users= new users;
        $users->name=$req->input(key:'name');
        $users->prenom=$req->input(key:'prenom');
        $users->email=$req->input(key:'email');
        $data=$req->input(key:'password');
        $users->password=Hash::make($data);
        $users->telephone=$req->input(key:'phone');
        $users->username=$req->input(key:'username');
        $users->save();
        return redirect('/');
    }
}
