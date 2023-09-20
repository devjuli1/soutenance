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
 Route::get('/about',[fontController::class,'aboutRegister'])->name('about');
 Route::get('/Nos_services',[fontController::class,'serviceRegister'])->name('Nos_services');
 Route::get('/prix',[fontController::class,'priceRegister'])->name('prix');
 Route::get('/contact',[fontController::class,'contactRegister'])->name('contact');
  

 Route::get('/offre',[fontController::class,'offreRegister'])->name('offre'); 
 Route::get('/temoin',[fontController::class,'temoignageRegister'])->name('temoin');
 Route::get('list_psy',[fontController::class,'listPsychologue'])->name('list_psy'); 
 Route::get('/specialité',[fontController::class,'specialiteRegister'])->name('specialité'); 
 Route::get('/info',[fontController::class,'rechercheRegister'])->name('info'); 
 Route::get('/meet',[fontController::class,'RDVRegister'])->name('meet'); 
 Route::get('/domaines',[fontController::class,'categorieRegister'])->name('domaines'); 

 Route::get('admin',[authController::class,'panel_admin'])->name('admin');
 Route::get('inscriptionPsy',[authController::class,'registerPsy'])->name('inscriptionPsy');
 Route::post('storePsy',[authController::class,'storePsy'])->name('storePsy');
 Route::get('inscriptionClient',[authController::class,'registerClient'])->name('inscriptionClient');
 Route::post('storeClient',[authController::class,'storeClient'])->name('storeClient');
 Route::get('connexion',[authController::class,'connexion'])->name('connexion');
 Route::post('storeConnexion',[authController::class,'connexionClient'])->name('storeConnexion');

 Route::get('psy',[PsyController::class,'espace_psy'])->name('psy');
 Route::get('deconnexion',[authController::class,'logout'])->name('deconnexion');


