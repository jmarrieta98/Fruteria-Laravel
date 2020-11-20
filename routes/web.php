<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruteriaController;
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

Route::get('fruteria/listado', [FruteriaController::class, 'showall'])->name('fruteria.listado');

Route::resource('fruteria',FruteriaController::class)->parameters(['fruteria' => 'fruta']);


//Route::get('fruteria',[FruteriaController::class , 'index'])->name('fruteria.index');
//
//Route::get('fruteria/crear', [FruteriaController::class, 'create'])->name('fruteria.create');
//
//
//Route::post('fruteria/guardar',[FruteriaController::class , 'store'])->name('fruteria.store');
//
//Route::get('fruteria/{fruta}', [FruteriaController::class, 'show'])->name('fruteria.show');
//
//Route::get('fruteria/{fruta}/edit', [FruteriaController::class, 'edit'])->name('fruteria.edit');
//
//Route::put('fruteria/{fruta}',[FruteriaController::class , 'update'])->name('fruteria.update');
//
//Route::delete('fruteria/{fruta}',[FruteriaController::class, 'destroy'])->name('fruteria.destroy');
