<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/students', 'StudentController');
Route::get('/getstudentsn','StudentController@showStudentN');
Route::view('/studentsn','Student.Nindex');
Route::get('/getstudents', 'StudentController@showStudent');

Route::resource('/teachres', 'TeacherController');
Route::view('/teachresn', 'Teacher.Nindex');
Route::get('/getteachresn', 'TeacherController@showTeacherN');

Route::get('/getteachres', 'TeacherController@showTeacher');

Auth::routes();
