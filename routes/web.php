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


Route::get('/employees',[\App\Http\Controllers\EmployeeController::class,'index'])->name('employees.index');
Route::get('/employees/create',[\App\Http\Controllers\EmployeeController::class,'create'])->name('employees.create');
Route::post('/employees/store',[\App\Http\Controllers\EmployeeController::class,'store'])->name('employees.store');
Route::get('/employees/edit/{id}',[\App\Http\Controllers\EmployeeController::class,'edit'])->name('employees.edit');
Route::put('/employees/update/{id}',[\App\Http\Controllers\EmployeeController::class,'update'])->name('employees.update');
Route::delete('/employees/destroy/{id}',[\App\Http\Controllers\EmployeeController::class,'destroy'])->name('employees.destroy');
