<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');

})->name('home');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/etudiants', [EtudiantController::class,'index'])->name('etudiantList');

    Route::get('/etudiant/{id}', [EtudiantController::class,'show'])->name('etudiantedit');
    Route::post('/etudiant/{id}', [EtudiantController::class,'update'])->name('etudiantedit');
    
    Route::get('/etudiant', [EtudiantController::class,'show'])->name('etudiantnew');
    Route::post('/etudiant', [EtudiantController::class,'store'])->name('etudiantnew');
    
    Route::get('/etudiant/delete/{id}', [EtudiantController::class,'destroy'])->name('etudiantdelete');
    
    Route::get('/filieres', [FiliereController::class,'index'])->name('filiereList');
    
    Route::get('/filiere/{id}', [FiliereController::class,'show'])->name('filiereedit');
    Route::post('/filiere/{id}', [FiliereController::class,'update'])->name('filiereedit');
    
    Route::get('/filiere', [FiliereController::class,'show'])->name('filierenew');
    Route::post('/filiere', [FiliereController::class,'store'])->name('filierenew');
    
    Route::get('/filiere/delete/{id}', [FiliereController::class,'destroy'])->name('filieredelete');
});



Route::get('/login', [UserController::class,'loginIndex'])->name('login');
Route::post('/login', [UserController::class,'login'])->name('login');
Route::get('/loginout', [UserController::class,'logout'])->name('logout');

