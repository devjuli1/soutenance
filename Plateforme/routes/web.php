<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontController;
use App\Http\Controllers\authController;
use App\Http\Controllers\PsyController;
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

 Route::get('/',[fontController::class,'indexRegister'])->name('index');
 Route::get('/Nos_services',[fontController::class,'serviceRegister'])->name('Nos_services');
 Route::get('/meet',[fontController::class,'RDVRegister'])->name('meet'); 
 Route::get('/temoin',[fontController::class,'temoignageRegister'])->name('temoin');
 Route::get('/offre',[fontController::class,'offreRegister'])->name('offre'); 
 Route::get('/spécialités',[fontController::class,'categorieRegister'])->name('domaines'); 
 Route::get('/Nos_Psy',[fontController::class,'specialisteRegister'])->name('specialiste'); 
 Route::get('/theme_psy',[fontController::class,'themeRegister'])->name('theme_psy');
 Route::get('/A_propos',[fontController::class,'aboutRegister'])->name('propos');
 Route::get('/blog',[fontController::class,'blogRegister'])->name('blog');
 Route::get('/contact',[fontController::class,'contactRegister'])->name('contact');
 Route::get('/info',[fontController::class,'rechercheRegister'])->name('info'); 


 Route::get('/espaceClient',[fontController::class,'homeClient'])->name('espaceClient');
 Route::get('/espacePsy',[fontController::class,'homePsy'])->name('espacePsy');
 Route::get('/espaceAdmin',[fontController::class,'homeAdmin'])->name('espaceAdmin');
 Route::get('list_psy',[fontController::class,'listPsychologue'])->name('list_psy'); 
 Route::get('list_client',[fontController::class,'listClient'])->name('list_client');

 Route::get('admin',[authController::class,'Admin'])->name('ajoutAdmin');
 Route::post('storeAdmin',[authController::class,'storeAdmin'])->name('storeAdmin');

 Route::get('inscriptionPsy',[authController::class,'registerPsy'])->name('inscriptionPsy');
 Route::post('storePsy',[authController::class,'storePsy'])->name('storePsy');

 Route::get('inscriptionClient',[authController::class,'registerClient'])->name('inscriptionClient');
 Route::post('storeClient',[authController::class,'storeClient'])->name('storeClient');

 Route::get('connexion',[authController::class,'connexion'])->name('connexion');
 Route::post('storeConnexion',[authController::class,'connexionClient'])->name('storeConnexion');

 Route::get('deconnexion',[authController::class,'logout'])->name('deconnexion');


