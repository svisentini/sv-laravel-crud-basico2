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


//Route::resource("/student", App\Http\Controllers\StudentController::class);
Route::get("/", "App\Http\Controllers\StudentController@home")->name('homeApp');
Route::get("/student", "App\Http\Controllers\StudentController@index")->name('studentFilter');
Route::get("/student/create", "App\Http\Controllers\StudentController@create")->name('studentCreate');
Route::get("student/edit/{student}","App\Http\Controllers\StudentController@edit")->name('studentEdit');
Route::put("student/edit/{student}","App\Http\Controllers\StudentController@update")->name('studentUpdate');
Route::get("/student/{student}", "App\Http\Controllers\StudentController@show")->name('studentShow');
Route::post("/student", "App\Http\Controllers\StudentController@store")->name('studentStore');
Route::delete("/student/{student}", "App\Http\Controllers\StudentController@destroy")->name('studentDestroy');
