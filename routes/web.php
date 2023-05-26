<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PunjabiItemController;
use App\Http\Controllers\PaijamaItemController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Punjabi Item Category
Route::get('/punjabi_item/index',[PunjabiItemController::class,'index'])->name('punjabi_item_index');
Route::get('/punjabi_item/create',[PunjabiItemController::class,'create'])->name('punjabi_item_create');
Route::post('/punjabi_item/store',[PunjabiItemController::class,'store'])->name('punjabi_item_store');
Route::get('/punjabi_item/{id}/edit',[PunjabiItemController::class,'edit'])->name('punjabi_item_edit');
Route::post('/punjabi_item/{id}/update',[PunjabiItemController::class,'update'])->name('punjabi_item_update');
Route::get('/punjabi_item/{id}/destroy',[PunjabiItemController::class,'destroy'])->name('punjabi_item_destroy');

// Paijama Item Category
Route::get('/Paijama_item/index',[PaijamaItemController::class,'index'])->name('Paijama_item_index');
Route::get('/Paijama_item/create',[PaijamaItemController::class,'create'])->name('Paijama_item_create');
Route::post('/Paijama_item/store',[PaijamaItemController::class,'store'])->name('Paijama_item_store');
Route::get('/Paijama_item/{id}/edit',[PaijamaItemController::class,'edit'])->name('Paijama_item_edit');
Route::post('/Paijama_item/{id}/update',[PaijamaItemController::class,'update'])->name('Paijama_item_update');
Route::get('/Paijama_item/{id}/destroy',[PaijamaItemController::class,'destroy'])->name('Paijama_item_destroy');

//order
Route::get('/order/index',[OrderController::class,'index'])->name('order_index');
Route::get('/order/create',[OrderController::class,'create'])->name('order_create');
Route::post('/order/store',[OrderController::class,'store'])->name('order_store');
Route::get('/order/{id}/edit',[OrderController::class,'edit'])->name('order_edit');
Route::post('/order/{id}/update',[OrderController::class,'update'])->name('order_update');
Route::get('/order/{id}/destroy',[OrderController::class,'destroy'])->name('order_destroy');

