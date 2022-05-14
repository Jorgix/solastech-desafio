<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SetorCadastro;

use Illuminate\Support\Facades\Route;

//Rotas Painel
Route::get('/painel', [SetorCadastro::class, 'index'])->name('painel.main');
Route::get('/create/setor', [SetorCadastro::class, 'create'])->name('painel.create');
Route::post('/create', [SetorCadastro::class, 'store'])->name('painel.store');


//Rotas públicas
Route::get('/', [DocumentController::class, 'index'])->name('doc.index');
Route::get('/create/document', [DocumentController::class, 'create'])->name('doc.create');
Route::post('/create', [DocumentController::class, 'store'])->name('doc.store');




