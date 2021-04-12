<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\FixtureController;
use App\Http\Controllers\API\TipController;
use App\Http\Controllers\API\RankingListController;
use App\Http\Controllers\API\TeamController;
use App\Http\Controllers\AuthController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::get('/fixtures', [FixtureController::class, 'index'])->middleware('auth:sanctum');
Route::post('/fixtures', [FixtureController::class, 'store'])->middleware('auth:sanctum');
Route::put('/fixtures/final/{id}', [FixtureController::class, 'updateResult'])->middleware('auth:sanctum');
Route::put('/fixtures/{id}', [FixtureController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/fixtures/{id}', [FixtureController::class, 'destroy'])->middleware('auth:sanctum');

Route::get('/tips', [TipController::class, 'index'])->middleware('auth:sanctum');
Route::post('/tips', [TipController::class, 'store'])->middleware('auth:sanctum');
Route::put('/tips/{id}', [TipController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/tips/{id}', [TipController::class, 'destroy'])->middleware('auth:sanctum');

Route::get('/ranking', [RankingListController::class, 'index'])->middleware('auth:sanctum');

Route::get('/teams', [TeamController::class, 'index'])->middleware('auth:sanctum');