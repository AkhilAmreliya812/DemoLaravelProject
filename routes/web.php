<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\namedRouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AgeCheck;   
use App\Http\Middleware\CountryCheck;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

route::redirect('/home', '/');

Route::get('userHome', [UserController::class, 'userHome']);
Route::get('user-about/{name}', [UserController::class, 'aboutUser']);
Route::get('adminLogin', [UserController::class, 'adminLogin']);

route::view('user-form', 'user-form');

Route::post('addUser', [FormController::class, 'addUser']);

Route::get('/home/profile/user', function () {
    return view('profile');
})->name('show');

Route::get('show', [namedRouteController::class, 'profile']);

Route::get('/home/profile/{name}', function () {
    return view('profile');
})->name('showName');

Route::get('show', [namedRouteController::class, 'showProfile']);

// Group routing with prefix
Route::prefix('student')->group(function () {
    // Group routing with controller
    Route::controller(StudentController::class)->group(function () {
       
        Route::middleware([AgeCheck::class, CountryCheck::class])->group(function () {
            Route::get('/add', 'addStudent')->name('addStudent');
        });
       
        Route::get('/update', 'updateStudent')->name('editStudent')->middleware([AgeCheck::class, CountryCheck::class]);
        Route::get('/delete', 'deleteStudent')->name('deleteStudent')->middleware('check'); // Note: 'ceck' is likely a typo and should be 'check'
        
    }); 
});

