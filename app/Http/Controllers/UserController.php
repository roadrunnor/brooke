<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    /* public function index(){
        $name='Mahdi';
        $users=array(
            "name" => 'Arian',
            "email"=>"arianVakily@gmail.com",
            "phone"=>"4384081385"
        );
        return view('user',\compact('name','users'));
    } */
    /* -- Ricardo--- */
    public function index(){
        return view('user');
    }
    
    /* public function loginSubmit(Request $request){
        // $validateData = $request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required|min:6|max:12'
        // ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $usertest =  User::get();
        $emailClient = User::where('email',$email)->get();

        return view('login', compact('emailClient'));
       // return view('products', compact('emailClient'));
        // if($email == $client->email && $password == $client->password){
            
        // }
    } */
     /* ------------ */
}
