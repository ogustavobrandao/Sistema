<?php
namespace App\Http\Controllers;

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

Route::get('/', function(){
    return view('home');
});

Route::prefix('entradas')->group(function () {
    
    Route::get('/', [EntradasController::class, 'index'])->name('entradas.index');
    Route::get('/create', [EntradasController::class, 'create'])->name('entradas.create');
    Route::post('/store', [EntradasController::class, 'store'])->name('entradas.store');
    Route::get('/{id}/edit', [EntradasController::class, 'edit'])->name('entradas.edit');
    Route::put('/{id}', [EntradasController::class, 'update'])->name('entradas.update');
    Route::delete('/{id}', [EntradasController::class, 'destroy'])->name('entradas.destroy');
});
Route::prefix('ToDoList')->group(function(){
    Route::get('/', [ListasController::class, 'index'])->name('listas.index');
    Route::get('/create', [ListasController::class, 'create'])->name('listas.create');
    Route::post('/store', [ListasController::class, 'store'])->name('listas.store');
    Route::get('/edit/{id}', [ListasController::class, 'edit'])->name('listas.edit');
    Route::put('/edit/{id}/put', [ListasController::class, 'update'])->name('listas.update');
    Route::get('/destroy/{id}',[ListasController::class, 'destroy'])->name('listas.destroy');
    Route::get('/gerarpdf', [ListasController::class, 'gerar'])->name('listas.gerar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
