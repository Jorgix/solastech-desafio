@extends('painel.layouts.app')

@section('title', 'Listagem dos setores')

@section('content')


    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{route('painel.main')}}">SolassTech</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisando por ..."
            aria-label="Search">
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('painel.main') }}">
                                <span data-feather="home"></span>
                                Setores
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Arquivos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Tramitações
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Cadastro de setores</h1>
                    <a href="{{ route('painel.create') }}" class="btn btn-primary my-3">Novo setor</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                                <tr>
                                    <th scope="col">Sigla</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Data de criação</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($setores as $setor)
                                <tr>
                                    <td>{{$setor->Sigla}}</td>
                                    <td>{{$setor->DescSetor}}</td>
                                    <td>{{$setor->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    </body>

    </html>


@endsection
