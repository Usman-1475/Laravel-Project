<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PupilController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('pupils',PupilController::class);
Route::resource('book',BookController::class);

Route::resource('teacher',TeacherController::class);
Route::resource('role',RoleController::class);