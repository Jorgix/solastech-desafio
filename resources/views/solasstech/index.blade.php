@extends('solasstech.layouts.app')

@section('title', 'Listagem dos setores')

@section('content')

    <div class="row ">
        <div class="col-8">
            <h1>Gerenciador de arquivos</h1>
            <a href="{{ route('doc.create') }}" class="btn btn-primary my-3">Novo Documento</a>
        </div>
        <div class="col-4">

            <form action="{{ route('doc.index') }}" method="get">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" name="search" class="form-control size-search"
                            placeholder="Digite o Titulo ou Número" />
                    </div>
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </div>
            </form>

        </div>
    </div>

    @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nº Documento</th>
                <th scope="col">Titulo</th>
                <th scope="col">Setor</th>
                <th scope="col">Data / Hora Envio</th>
                <th scope="col">Setor Recebeu</th>
                <th scope="col">Data e hora que recebeu</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <th scope="row">{{ $document->ndocument }}</th>
                    <td>{{ $document->title }}</td>
                    <td>SETOR</td>
                    <td>{{ \Carbon\Carbon::parse($document->updated_at)->format('j \d\e F \d\e Y \à\s\ H:i') }} </td>
                    <td>SETOR</td>
                    <td>Hora que recebeu</td>
                    <td><button type="button" class="btn btn-outline-success">Enviar</button> <button type="button"
                            class="btn btn-outline-primary">Receber</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
