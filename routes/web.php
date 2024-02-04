<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ObjetoController;
use App\Http\Controllers\HomeController;

Route::get('objetos/create', [ObjetoController::class, 'create'])->name('objetos.create');


Route::get('objetos', [ObjetoController::class, 'index'])->name('objetos.index');
Route::get('objetos/create', [ObjetoController::class, 'create'])->name('objetos.create');
Route::post('objetos', [ObjetoController::class, 'store'])->name('objetos.store');
Route::get('objetos/{objeto}', [ObjetoController::class, 'show'])->name('objetos.show');
Route::get('objetos/{objeto}/edit', [ObjetoController::class, 'edit'])->name('objetos.edit');
Route::put('objetos/{objeto}', [ObjetoController::class, 'update'])->name('objetos.update');
Route::delete('objetos/{objeto}', [ObjetoController::class, 'destroy'])->name('objetos.destroy');


Route::get('proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');

Route::get('proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');

Route::get('proveedores/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');

Route::resource('proveedores', ProveedorController::class);
Route::delete('proveedores/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');