<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// CAGE ROUTES
Route::get('/cages', [\App\Http\Controllers\CageController::class, 'index'])->name('cage.index');

Route::get('/cage/create', [\App\Http\Controllers\CageController::class, 'create'])->name('cage.create');
Route::post('/cage/store', [\App\Http\Controllers\CageController::class, 'store'])->name('cage.store');

Route::get('/cage/show/{cage}', [\App\Http\Controllers\CageController::class, 'show'])->name('cage.show');

Route::get('/cage/edit/{cage}', [\App\Http\Controllers\CageController::class, 'edit'])->name('cage.edit');
Route::patch('/cage/update/{cage}', [\App\Http\Controllers\CageController::class, 'update'])->name('cage.update');
Route::delete('/cage/delete/{cage}', [\App\Http\Controllers\CageController::class, 'delete'])->name('cage.delete');


// ANIMAL ROUTES

Route::get('/animal/show/{animal}', [\App\Http\Controllers\AnimalController::class, 'show'])->name('animal.show');

Route::get('/animal/edit/{animal}', [\App\Http\Controllers\AnimalController::class, 'edit'])->name('animal.edit');
Route::patch('/animal/update/{animal}', [\App\Http\Controllers\AnimalController::class, 'update'])->name('animal.update');
Route::delete('/animal/delete/{animal}', [\App\Http\Controllers\AnimalController::class, 'delete'])->name('animal.delete');

Route::get('/animal/create/{cage}', [\App\Http\Controllers\AnimalController::class, 'create'])->name('animal.create');
Route::post('/animal/store/{cage}', [\App\Http\Controllers\AnimalController::class, 'store'])->name('animal.store');



