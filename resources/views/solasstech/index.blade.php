<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url(mix('solasstech/css/bootstrap.css')) }}">
    <title>Listagem dos setores</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-12 p-5">
                <h1>Listagem dos setores</h1>
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
                @foreach ($setores as $setor)
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>{{$setor->Sigla}}</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-outline-primary">Primary</button> <button type="button" class="btn btn-outline-secondary">Secundário</button></td>
                            </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>

</body>

</html>
