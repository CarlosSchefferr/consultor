<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Projeto Consultores')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <style>
    .navbar {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        text-align: center;
    }

    .vl {
        top: 40px;
        left : 44%;
        font-size: large;
        padding: 10px 50px;
        background-color: white;
        border: 1px solid #007bff;
        color: black;
        border-radius: 5px;
        text-decoration: none;
        position: absolute;
    }

    .vl:hover {
        background-color: #007bff;
        color: white;
    }

    .cll:hover {
        background-color: #0056b3;
    }

    .cmp:hover {
        background-color: #0056b3;
    }


    .cll {
        top: 280px;
        left : 44%;
        font-size: large;
        padding: 10px 60px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        position: absolute;
    }

    .cmp {
        top: 200px;
        left : 44%;
        position: absolute;
        font-size: large;
            padding: 10px 50px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
    }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="vl" href="{{ url('/') }}">Voltar ao inicio</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="cll" href="{{ route('consultores.index') }}">Consultores</a>
                </li>
                <li class="nav-item">
                    <a class="cmp" href="{{ route('compromissos.index') }}">Compromissos</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
