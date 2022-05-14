<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url(mix('solasstech/css/bootstrap.css')) }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-12 p-5">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<script src="{{ url(mix('solasstech/js/bootstrap.bundle.js')) }}"></script>
</html>
