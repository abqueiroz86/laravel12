<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin/usuarios')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('usuarios.index');
    Route::get('/cadastrar', [UserController::class, 'create'])->name('usuarios.create');
    Route::post('/cadastrar', [UserController::class, 'store'])->name('usuarios.store');
    Route::get('/{user}', [UserController::class, 'show'])->name('usuarios.show');
});
