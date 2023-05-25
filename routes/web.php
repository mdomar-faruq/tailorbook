<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

// Route::get('/user', function () {
//     return view('user.dashboard');
//     return $x;
//     return response()->json("data");
// });

//user create
Route::post('/tailore_register',[GuestController::class,'tailore_register'])->name('tailore_register');
//order
Route::get('/order_create',[OrderController::class,'order_create'])->name('order_create');


//catagori
Route::get('/cat_index',[CatagoryController::class,'index'])->name('cat_index');
Route::get('/cat_create',[CatagoryController::class,'create'])->name('cat_create');
Route::post('/cat_store',[CatagoryController::class,'store'])->name('cat_store');
Route::get('/cat_edit',[CatagoryController::class,'edit'])->name('cat_edit');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
