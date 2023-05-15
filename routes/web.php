<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
});

Route::get('/user', function () {
    return view('user.dashboard');
});

//login
Route::get('/login',[HomeController::class,'Login'])->name('login');
Route::post('/tailor_login',[HomeController::class,'tailore_login'])->name('tailore_login');

//register
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/tailore_register',[HomeController::class,'tailore_register'])->name('tailore_register');