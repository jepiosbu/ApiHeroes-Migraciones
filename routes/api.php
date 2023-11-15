<?php

use App\Http\Controllers\PlanetaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('planetas/get',[PlanetaController::class,'getplanetas']);
Route::post('planeta/post',[PlanetaController::class,'postplaneta']);
Route::put('planeta/put/{id}',[PlanetaController::class,'putplaneta']);
Route::delete('planeta/delete/{id}',[PlanetaController::class,'deleteplaneta']);

Route::get('equipos/get',[PlanetaController::class,'getequipos']);
Route::post('equipo/post',[PlanetaController::class,'postequipo']);
Route::put('equipo/put/{id}',[PlanetaController::class,'putequipo']);
Route::delete('equipo/delete/{id}',[PlanetaController::class,'deleteequipo']);

Route::get('tmisiones/get',[PlanetaController::class,'gettmisiones']);
Route::post('tmision/post',[PlanetaController::class,'posttmision']);
Route::put('tmision/put/{id}',[PlanetaController::class,'puttmision']);
Route::delete('tmision/delete/{id}',[PlanetaController::class,'deletetmision']);

Route::get('superpoderes/get',[PlanetaController::class,'getsuperpoderes']);
Route::post('superpoder/post',[PlanetaController::class,'postsuperpoder']);
Route::put('superpoder/put/{id}',[PlanetaController::class,'putsuperpoder']);
Route::delete('superpoder/delete/{id}',[PlanetaController::class,'deletesuperpoder']);

Route::get('misiones/get',[PlanetaController::class,'getmisiones']);
Route::post('mision/post',[PlanetaController::class,'postmision']);
Route::put('mision/put/{id}',[PlanetaController::class,'putmision']);
Route::delete('mision/delete/{id}',[PlanetaController::class,'deletemision']);

Route::get('superheroes/get',[PlanetaController::class,'getsuperheroes']);
Route::post('superheroe/post',[PlanetaController::class,'postsuperheroe']);
Route::put('superheroe/put/{id}',[PlanetaController::class,'putsuperheroe']);
Route::delete('superheroe/delete/{id}',[PlanetaController::class,'deletesuperheroe']);

Route::get('misionsuperheroes/get',[PlanetaController::class,'getmisionsuperheroes']);
Route::post('misionsuperheroe/post',[PlanetaController::class,'postmisionsuperheroe']);
Route::put('misionsuperheroe/put/{id}',[PlanetaController::class,'putmisionsuperheroe']);
Route::delete('misionsuperheroe/delete/{id}',[PlanetaController::class,'deletemisionsuperheroe']);

Route::get('poderesheroes/get',[PlanetaController::class,'getpoderesheroes']);
Route::post('poderheroe/post',[PlanetaController::class,'postpoderheroes']);
Route::put('poderheroe/put/{id}',[PlanetaController::class,'putpoderheroes']);
Route::delete('poderheroe/delete/{id}',[PlanetaController::class,'deletepoderheroe']);