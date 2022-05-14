<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDocumentFormRequest;
use App\Models\DocumentFile;
use Illuminate\Http\Request;


class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        if($search){
            $documents = DocumentFile::where('title', 'LIKE', "{$request->search}")
        ->orWhere('ndocument', 'LIKE', "{$request->search}")->get();
        }else{
            $documents = DocumentFile::get();
        }

        return view('solasstech.index', compact('documents'));
    }

    public function create(){
        return view('solasstech.create');
    }

    public function store(StoreUpdateDocumentFormRequest $request)
    {

        $data = $request->all();
        if ($request->pathdocument) {

            $nameFile = now() .'.'. $request->pathdocument->getClientOriginalExtension();
            //$random = Str::random(5);
            $random = random_int(10000, 99999);

            $file = $request->pathdocument->storeAs('files', $nameFile);
            $data['pathdocument'] = $file;
            $data['ndocument'] = $random;

        }
        DocumentFile::create($data);

        return redirect()
                ->route('doc.index')
                ->with('msg', 'Documento enviado com sucesso');;
    }
}
