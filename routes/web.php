<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::post("home",[LoginController::class,'index']);
Route::get("list",[LoginController::class,'list']);
Route::get('layout', function () {
    return view('layout');

});
Route::get('add', function () {
    return view('add');

});
Route::post("add",[LoginController::class,'add']);
Route::get("edit{id}",[LoginController::class,'edit']);
Route::post("edit",[LoginController::class,'Update']);

Route::get('delete/{id}',[LoginController::class,'delete']);

Route::view('register', 'register');
Route::post('register',[LoginController::class,'register']);

Route::view('login', 'login');
Route::post('login',[LoginController::class,'login']);



