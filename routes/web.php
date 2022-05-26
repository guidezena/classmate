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
    return view('/welcome');
});

//ADMINISTRADOR
Route::get('/cadastro', function () {
    return view('adm/create_account');
});
Route::get('/admconnect', function () {
    return view('adm/connect');
});
Route::get('/admclass', function () {
    return view('adm/class_schedule');
});
Route::get('/admsubjects', function () {
    return view('adm/subjects');
});
Route::get('/addsubjects', function () {
    return view('adm/addsubjects');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// PROFESSOR



Route::get('/subjects', function () {
    return view('teacher/teacher_subjects');
});
Route::get('/schoolschedule', function () {
    return view('teacher/school_schedule');
});
Route::get('/activity', function () {
    return view('teacher/activity');
});
Route::get('/profile', function () {
    return view('teacher/editprofile');
});