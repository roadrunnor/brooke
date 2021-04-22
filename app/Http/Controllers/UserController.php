<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index(){
        $name='Mahdi';
        $users=array(
            "name" => 'Arian',
            "email"=>"arianVakily@gmail.com",
            "phone"=>"4384081385"
        );
        return view('user',\compact('name','users'));
    }
}
