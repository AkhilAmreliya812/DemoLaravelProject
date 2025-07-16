<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class namedRouteController extends Controller
{
    function profile() {
        //return redirect()->to('home/profile/user'); // working
        //return redirect()->route('show'); // working
        return to_route('show'); // working
    } 

    function showProfile() {
        return to_route('show',['name'=>'Akhil']);
    }
}
