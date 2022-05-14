<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSectorFormRequest;
use App\Models\SetorCadastro as ModelsSetorCadastro;
use Illuminate\Http\Request;

class SetorCadastro extends Controller
{
    public function index(){
        $setores = ModelsSetorCadastro::get();
        return view('painel.main', compact('setores'));
    }

    public function create(){
        return view('painel.create');
    }

    public function store(StoreUpdateSectorFormRequest $request)
    {
        $data = $request->all();

        SetorCadastro::create($data);

        return redirect()
                ->route('painel.main')
                ->with('msg', 'Setor criado com sucesso');;
    }

}
