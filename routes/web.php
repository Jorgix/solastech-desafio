<?php

use App\Http\Controllers\SetorCadastro;
use Illuminate\Support\Facades\Route;

Route::get('/', [SetorCadastro::class, 'index'])->name('setor.index');


