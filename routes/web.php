<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentControllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get student-list.blade.php to view the content
Route::get('/student-list',[StudentController::class,'index']);//pass the data to student-list.blade.php
Route::get('/add-student',[StudentController::class,'addStudent']);
Route::post('/save-student',[StudentController::class,'saveStudent']);
Route::get('/edit-student/{id}',[StudentController::class,'editStudent']);
Route::post('/update-student',[StudentController::class,'updateStudent']);
Route::get('/delete-student/{id}',[StudentController::class,'deleteStudent']);