<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function addUser(Request $request) {
        //echo $request;
        echo "Username is :" . $request->username . "<br>";
        echo "Email is :" .  $request->email . "<br>";
        echo "City is :" .  $request->city . "<br>";
        echo "Gender is :" . $request->gender . "<br>";
        print_r($request->vehicle);
    }
}
