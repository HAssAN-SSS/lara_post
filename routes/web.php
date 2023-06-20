<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userConroller;
use App\Http\Controllers\postController;

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
Route::post('/register', [userConroller::class,'register']);
Route::post('/login', [userConroller::class,'login']);
Route::get('/logout', [userConroller::class,'logout']);

// !-----------------------------------------------------------post routs

Route::get('/create_post',[postController::class,'show_create_post']);
Route::post('/create_post',[postController::class,'storeNewPost']);
Route::get('/post/{post}',[postController::class,'show_post']);

