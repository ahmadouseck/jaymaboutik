<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/redirect', [HomeController::class,'redirect']);

Route::get('/', [HomeController::class,'index']);

Route::get('/contact', [HomeController::class,'contact']);

Route::get('/apropos', [HomeController::class,'apropos']);

Route::get('/nosproduits', [HomeController::class,'nosproduits']);

Route::get('/product', [AdminController::class,'product']);



Route::post('/uploadproduct', [AdminController::class,'uploadproduct']);

Route::get('/showproduct', [AdminController::class,'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class,'deleteproduct']);

Route::get('/updateview/{id}', [AdminController::class,'updateview']);

Route::post('/updateproduct/{id}', [AdminController::class,'updateproduct']);


Route::get('/search', [HomeController::class,'search']);


Route::post('/addcart/{id}', [HomeController::class,'addcart']);

Route::get('/showcart', [HomeController::class,'showcart']);

Route::get('/deletecart/{id}', [HomeController::class,'deletecart']);


Route::post('/order', [HomeController::class,'confirmorder']);

Route::get('/showorder', [AdminController::class,'showorder']);

Route::get('/updatestatus/{id}', [AdminController::class,'updatestatus']);


Route::post('/savemessage', [HomeController::class,'savemessage']);

Route::get('/showmessage', [AdminController::class,'showmessage']);
