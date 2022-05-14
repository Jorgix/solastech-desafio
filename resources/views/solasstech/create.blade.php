@extends('solasstech.layouts.app')

@section('title', 'Novo documento')

@section('content')

    <div class="form-wrapper w-50 m-auto bg-light p-5 shadow-sm">
        <h1 class="h2">Criar documento</h1>
        @if ($errors->any())
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger mt-1">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('doc.store') }}" class="mt-5" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome do arquivo</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrição do arquivo</label>
                <textarea rows="3" class="form-control" name="description" value="{{ old('description') }}"></textarea>
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Envie o seu arquivo, tamanho máximo de 100mb.</label>
                <input class="form-control" type="file" name="pathdocument" id="multiFiles" multiple>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Enviar arquivo</button>

        </form>
    </div>

@endsection
