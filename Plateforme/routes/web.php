<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontController;
use App\Http\Controllers\authController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/',[fontController::class,'indexRegister']);
 Route::get('/about',[fontController::class,'aboutRegister'])->name('about');
 Route::get('/Nos_services',[fontController::class,'serviceRegister'])->name('Nos_services');
 Route::get('/prix',[fontController::class,'priceRegister'])->name('prix');
 Route::get('/contact',[fontController::class,'contactRegister'])->name('contact');
 Route::get('/propos',[fontController::class,'proposRegister'])->name('propos'); 

 Route::get('/temoin',[fontController::class,'temoignageRegister'])->name('temoin'); 
 Route::get('/specialité',[fontController::class,'specialiteRegister'])->name('specialité'); 
 Route::get('/info',[fontController::class,'rechercheRegister'])->name('info'); 
 Route::get('/meet',[fontController::class,'RDVRegister'])->name('meet'); 
 Route::get('/domaines',[fontController::class,'categorieRegister'])->name('domaines'); 

 Route::get('inscrit',[authController::class,'register'])->name('inscription');