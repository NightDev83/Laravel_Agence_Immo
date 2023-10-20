<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostAjoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostModificationController;
use App\Http\Controllers\PostSuprimmerController;
use GuzzleHttp\Middleware;
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

Route::get('/',[HomeController::class, 'home'])->name('Home');
Route::get('/connexion',[ConnexionController::class,'view'])->name('Connexion');
Route::post('/connexion',[ConnexionController::class,'connexion', 'attemptLogin']);
Route::get('/deconnexion',[ConnexionController::class,'deconexion'])->name('deconnexion');
Route::get('/information',[InformationController::class,'view'])->middleware('auth')->name('Information');
Route::post('/information',[InformationController::class,'modification'])->middleware('auth');

Route::get('/gestion', [PostController::class,'view'])->middleware('auth')->name('Gestion');
Route::get('/gestionpostajout', [PostController::class,'ajout'])->middleware('auth')->name('gestion.ajout');
Route::get('/gestionpost/{id}',[PostModificationController::class,'edit'])->middleware('auth')->name('gestion.modifier');

Route::post('/gestionpost/{id}',[PostModificationController::class,'update'])->middleware('auth')->name('gestion.update');
Route::post('/gestionpostajout',[PostAjoutController::class,'ajouter']);
Route::get('/gestion/suprimer/{id}',[PostSuprimmerController::class,'supprimer'])->middleware('auth')->name('gestion.supprimer');

Route::get('/annonce/{id}',[PostController::class,'annonce'])->name('gestion.view');
Route::post('/annonce/{id}',[PostController::class,'envoie'])->name('gestion.envoie');

Route::get('/message',[MessageController::class,'message'])->middleware('auth')->name('message');

Route::delete('/supprimer-message/{id}', [MessageController::class,'supprimerMessage'])->middleware('auth')->name('supprimer.message');


