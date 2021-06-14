<?php

use Controllers\AnimalController;
use Controllers\LivreController;
use Controllers\AuteurController;
use Facades\Route;

Route::get('/livres',[LivreController::class, 'index']);
//Route::get('/livres/{id}', [LivreController::class, 'show']);
Route::get('/livres/create', [LivreController::class, 'creationpage']);
Route::post('/livres/creating', [LivreController::class, 'create']);
Route::get('/livres/delete', [LivreController::class, 'deletePage']);
Route::post('/livres/deleting', [LivreController::class, 'delete']);

Route::get('/auteurs',[AuteurController::class, 'index']);
//Route::get('/auteurs/{id}', [AuteurController::class, 'show']);
Route::get('/auteurs/create', [AuteurController::class, 'creationpage']);
Route::post('/auteurs/creating', [AuteurController::class, 'create']);
Route::get('/auteurs/delete', [AuteurController::class, 'deletePage']);
Route::post('/auteurs/deleting', [AuteurController::class, 'delete']);
Route::get('/auteurs/update/{id}', [AuteurController::class, 'updatePage']);
Route::post('/auteurs/update/updating', [AuteurController::class, 'update']);
//Route::post('/auteurs/update/{id}/{name}', [AuteurController::class, 'update']);


Route::get('/animals', [AnimalController::class, 'index']);
Route::get('/animals/{id}', [AnimalController::class, 'show']);
