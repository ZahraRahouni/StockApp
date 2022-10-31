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

Route::get('/departements',[\App\Http\Controllers\DepartementController::class,'index'])->name('departements.index');
Route::get('/departements/create',[\App\Http\Controllers\DepartementController::class,'create'])->name('departements.create');
Route::post('/departements/store',[\App\Http\Controllers\DepartementController::class,'store'])->name('departements.store');
Route::get('/departements/edit/{id}',[\App\Http\Controllers\DepartementController::class,'edit'])->name('departements.edit');
Route::put('/departements/update/{id}',[\App\Http\Controllers\DepartementController::class,'update'])->name('departements.update');
Route::delete('/departements/destroy/{id}',[\App\Http\Controllers\DepartementController::class,'destroy'])->name('departements.destroy');
