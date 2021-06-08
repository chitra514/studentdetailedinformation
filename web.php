<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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
Route::get('student',[studentcontroller::class,'create']);
Route::get('state',[studentcontroller::class,'index']);
Route::get('district',[studentcontroller::class,'createdistrict']);
Route::get('city',[studentcontroller::class,'createcity']);
Route::get('school',[studentcontroller::class,'createschool']);
Route::get('class',[studentcontroller::class,'createclass']);

Route::post('/addstudent','App\Http\Controllers\studentcontroller@storestudent')->name('addstudent');
Route::post('/addstate','App\Http\Controllers\studentcontroller@storestate')->name('addstate');
Route::post('/adddistrict','App\Http\Controllers\studentcontroller@storedistrict')->name('adddistrict');
Route::post('/addcity','App\Http\Controllers\studentcontroller@storecity')->name('addcity');
Route::post('/addschool','App\Http\Controllers\studentcontroller@storeschool')->name('addschool');
Route::post('/addclass','App\Http\Controllers\studentcontroller@storeclass')->name('addclass');

Route::get('status',[studentcontroller::class,'show']);
Route::get('studentdetails',[studentcontroller::class,'showstudentdetails']);