<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        return view('employee.add');
    }
    public function storeEmployee(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255|min:3',
            'email' => 'required|email|max:255|min:5|Lowercase',
            'phone' => 'required|numeric|min:10',
        ],
        [
            'name.required' => 'Name is required',
            'name.regex' => 'Name must contain only letters and spaces',
            'name.max' => 'Name cannot exceed 255 characters',
            'name.min' => 'Name must be at least 3 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'email.max' => 'Email cannot exceed 255 characters',
            'email.min' => 'Email must be at least 5 characters',
            'email.Lowercase' => 'Email must be in lowercase',
        ]);
    }
}
