<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cars;
use App\Http\Controllers\model;
use App\Http\Controllers\year;
use App\Http\Controllers\brand;

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

Route::get('/main', function () {
    return view('main');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/main', [App\Http\Controllers\HomeController::class, 'mane'])->name('main');
Route::get('/model', [App\Http\Controllers\HomeController::class, 'mod'])->name('model');
Route::get('/year', [App\Http\Controllers\HomeController::class, 'yea'])->name('year');
Route::get('/manufacture', [App\Http\Controllers\HomeController::class, 'mane'])->name('man');


Route::get('main',[cars::class,'show']);
Route::get('model',[model::class,'bra']);
Route::get('year',[year::class,'bra']);
Route::get('manufacture',[brand::class,'bra']);
Route::get('/search',[App\Http\Controllers\HomeController::class,'search'])->name('search');