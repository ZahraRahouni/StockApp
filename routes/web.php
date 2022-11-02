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

//Departements
Route::get('/departements',[\App\Http\Controllers\DepartementController::class,'index'])->name('departements.index');
Route::get('/departements/create',[\App\Http\Controllers\DepartementController::class,'create'])->name('departements.create');
Route::post('/departements/store',[\App\Http\Controllers\DepartementController::class,'store'])->name('departements.store');
Route::get('/departements/edit/{id}',[\App\Http\Controllers\DepartementController::class,'edit'])->name('departements.edit');
Route::put('/departements/update/{id}',[\App\Http\Controllers\DepartementController::class,'update'])->name('departements.update');
Route::delete('/departements/destroy/{id}',[\App\Http\Controllers\DepartementController::class,'destroy'])->name('departements.destroy');

//Employees
Route::get('/employees',[\App\Http\Controllers\EmployeeController::class,'index'])->name('employees.index');
Route::get('/employees/create',[\App\Http\Controllers\EmployeeController::class,'create'])->name('employees.create');
Route::post('/employees/store',[\App\Http\Controllers\EmployeeController::class,'store'])->name('employees.store');
Route::get('/employees/edit/{id}',[\App\Http\Controllers\EmployeeController::class,'edit'])->name('employees.edit');
Route::put('/employees/update/{id}',[\App\Http\Controllers\EmployeeController::class,'update'])->name('employees.update');
Route::delete('/employees/destroy/{id}',[\App\Http\Controllers\EmployeeController::class,'destroy'])->name('employees.destroy');

// Products
Route::get('/products', [\App\Http\Controllers\ProductController::class,'index'])->name('products.index');
Route::get('/products/create', [\App\Http\Controllers\ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[\App\Http\Controllers\ProductController::class,'store'])->name('products.store');
Route::get('/products/edit/{id}',[\App\Http\Controllers\ProductController::class,'edit'])->name('products.edit');
Route::put('/products/update/{id}',[\App\Http\Controllers\ProductController::class,'update'])->name('products.update');
Route::delete('/products/destroy/{id}',[\App\Http\Controllers\ProductController::class,'destroy'])->name('products.destroy');

// Categories

Route::get('/categories',[\App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/create',[\App\Http\Controllers\CategoryController::class,'create'])->name('categories.create');
Route::post('/categories/store',[\App\Http\Controllers\CategoryController::class,'store'])->name('categories.store');
Route::get('/categories/edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('categories.edit');
Route::put('/categories/update/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories/destroy/{id}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('categories.destroy');
