<?php

namespace App\Http\Controllers;

use App\Models\SetorCadastro as ModelsSetorCadastro;
use Illuminate\Http\Request;

class SetorCadastro extends Controller
{
    public function index(){

        $setores = ModelsSetorCadastro::get();
        return view('solasstech.index', compact('setores'));
    }
}
