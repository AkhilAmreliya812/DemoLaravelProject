<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
   function userHome() {
     $name = "Akhil";
     $users = ["Akhil","jaydeep","Sanket","Kishan","Saurav","Kaushik"];
     return view('home',['name'=>$name,'users'=>$users]);
   }

   function aboutUser($name) {
        return view('about',['name'=>$name]);
   }

   function adminLogin() {
       if(View::exists('admin.login')) {
            return view('admin.login');
       } else {
            return "404 Not found";
       }
    
   }
}
