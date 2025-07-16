<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function addStudent() {
        return view('add');
    }

    function updateStudent() {
        return view('update');
    }

    function deleteStudent() {
        return view('delete');
    }
}
