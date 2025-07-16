<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\namedRouteController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});

route::redirect('/home','/');

Route::get('userHome',[UserController::class,'userHome']);
Route::get('user-about/{name}',[UserController::class,'aboutUser']);
Route::get('adminLogin',[UserController::class,'adminLogin']);

route::view('user-form','user-form');

Route::post('addUser',[FormController::class,'addUser']);

Route::get('/home/profile/user',function () {
    return view('profile');
})->name('show');

Route::get('show',[namedRouteController::class,'profile']);

Route::get('/home/profile/{name}',function () {
    return view('profile');
})->name('show');

Route::get('show',[namedRouteController::class,'showProfile']);




Route::prefix('student')->group(function () {
    Route::get('/add', [StudentController::class, 'addStudent'])->name('student.add');
    Route::post('/update', [StudentController::class, 'updateStudent'])->name('student.update');
    Route::get('/delete', [StudentController::class, 'deleteStudent'])->name('student.delete');
});


