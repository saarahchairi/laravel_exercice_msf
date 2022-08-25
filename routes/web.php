<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\BatimentsController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\TypeFormationssController;


Route::get('/', function () {
    return view('home');
});

Route::get('/batiment', [BatimentsController::class,'index'])->name('batiment');
Route::delete('/batiment/{id}/delete', [BatimentsController::class,'destroy']);
Route::get('/editBatiment/{id}', [BatimentsController::class,'show']);
Route::put('/editBatiment/{id}/update', [BatimentsController::class,'update']);
Route::post('/batiment/create', [BatimentsController::class,'store']);

Route::get('/eleve', [ElevesController::class,'index'])->name('eleve');
Route::delete('/eleve/{id}/delete', [ElevesController::class,'destroy']);
Route::get('/editEleve/{id}', [ElevesController::class,'show']);
Route::put('/editEleve/{id}/update', [ElevesController::class,'update']);
Route::post('/eleve/create', [ElevesController::class,'store']);

Route::get('/formation', [FormationsController::class,'index'])->name('formation');
Route::delete('/formation/{id}/delete', [FormationsController::class,'destroy']);
Route::get('/editFormation/{id}', [FormationsController::class,'show']);
Route::put('/editFormation/{id}/update', [FormationsController::class,'update']);
Route::post('/formation/create', [FormationsController::class,'store']);

Route::get('/typeFormation', [TypeFormationssController::class,'index'])->name('typeFormation');
Route::delete('/typeFormation/{id}/delete', [TypeFormationssController::class,'destroy']);
Route::get('/editTypeFormation/{id}', [TypeFormationssController::class,'show']);
Route::put('/editTypeFormation/{id}/update', [TypeFormationssController::class,'update']);
Route::post('/typeFormation/create', [TypeFormationssController::class,'store']);
