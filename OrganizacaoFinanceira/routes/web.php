<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

    Route::get('/', [EntradasController::class, 'index'])->name('entradas.index')->middleware('auth');
    Route::get('/create', [EntradasController::class, 'create'])->name('entradas.create')->middleware('auth');
    Route::post('/store', [EntradasController::class, 'store'])->name('entradas.store')->middleware('auth');
    Route::get('/{id}/edit', [EntradasController::class, 'edit'])->name('entradas.edit')->middleware('auth');
    Route::put('/{id}', [EntradasController::class, 'update'])->name('entradas.update')->middleware('auth');
    Route::delete('/{id}', [EntradasController::class, 'destroy'])->name('entradas.destroy')->middleware('auth');
});
Route::prefix('ToDoList')->group(function(){
    Route::get('/', [ListasController::class, 'index'])->name('listas.index')->middleware('auth');
    Route::get('/create', [ListasController::class, 'create'])->name('listas.create')->middleware('auth');
    Route::post('/store', [ListasController::class, 'store'])->name('listas.store')->middleware('auth');
    Route::get('/edit/{id}', [ListasController::class, 'edit'])->name('listas.edit')->middleware('auth');
    Route::put('/edit/{id}/put', [ListasController::class, 'update'])->name('listas.update')->middleware('auth');
    Route::get('/destroy/{id}',[ListasController::class, 'destroy'])->name('listas.destroy')->middleware('auth');
    Route::get('/gerarpdf', [ListasController::class, 'gerar'])->name('listas.gerar')->middleware('auth');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
