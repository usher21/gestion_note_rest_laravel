<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\LevelController;
use App\Models\Classe;
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

Route::prefix('/level')->name('level.')->controller(LevelController::class)->group(function()
{
    Route::get('/', 'showAll')->name('all');
    Route::post('/add', 'add')->name('add');
    Route::get('/{id}', 'show')->name('show');
});

Route::prefix('/classe')->name('classe.')->controller(ClasseController::class)->group(function() {
    Route::get('/', 'showAll')->name('all');
    Route::post('/add', 'add')->name('add');
    Route::get('/{id}', 'show')->name('show');
});

Route::get('/level/classe/{id}',[ClasseController::class, 'byLevel']);

