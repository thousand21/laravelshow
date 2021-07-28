<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Ingredient;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/homecreate',[HomeController::class,'create'])->name('homecreate');

Route::post('/homestore',[HomeController::class,'store'])->name('store');

Route::get('/Ingredients',[Ingredient::class,'index'])->name('ingredients');

Route::delete('/members/{id}/delete', [Ingredient::class, 'destroy'])->name('delete');

Route::get('/membres/{id}/show',[Ingredient::class,'show'])->name('show');
