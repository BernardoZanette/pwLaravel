<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index');

Route::get('/animais', [AnimaisController::class, 'index'])->name('animais');

Route::get('/animais/cadastrar', [AnimaisController::class, 'cadastrar'])->name('animais.cadastrar');

Route::post('/animais/cadastrar',[AnimaisController::class, 'gravar'])->name('animais.gravar');

Route::get('/animais/apagar/{animal}', [AnimaisController::class, 'apagar'])->name('animais.apagar');

Route::delete('/animais/apagar/{animal}', [AnimaisController::class, 'deletar']);

// Usuários

Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario');

Route::get('/usuario/cadastrar', [UsuarioController::class, 'cadastrar'])->name('usuario.cadastrar');

Route::post('/usuario/cadastrar',[UsuarioController::class, 'gravar'])->name('usuario.gravar');

Route::get('/usuario/editar/{usuario}', [UsuarioController::class, 'editarView'])->name('usuario.editar');

Route::put('/usuario/editar/{usuario}', [UsuarioController::class, 'editar']);

Route::get('/usuario/apagar/{usuario}', [UsuarioController::class, 'apagar'])->name('usuario.apagar');

Route::delete('/usuario/apagar/{usuario}', [UsuarioController::class, 'deletar']);

// login

Route::get('/usuario/login', [UsuarioController::class, 'login'])->name('login');

Route::post('/usuario/login', [UsuarioController::class, 'login']);

Route::get('/usuario/logout', [UsuarioController::class, 'logout'])->name('logout');

Route::post('/usuario/logout', [UsuarioController::class, 'logout'])->name('logout');