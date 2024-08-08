<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Projeto Consultores')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <style>
    .navbar {
        font-family: 'Montserrat', sans-serif;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        text-align: center;
    }

    .vl {
        font-family: 'Montserrat', sans-serif;
       width: 100px;
        margin-top: 40px;
        margin-bottom: 40px;
        font-size: large;
        padding: 10px 50px;
        background-color: white;
        border: 1px solid #007bff;
        color: black;
        border-radius: 5px;
        text-decoration: none;
        justify-content: center;
        align-items: center;
        display: flex;
        
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
        font-family: 'Montserrat', sans-serif;
        width: 100px;
        font-size: large;
        padding: 10px 50px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        justify-content: center;
        align-items: center;
        display: flex;
       
    }

    .cmp {
        font-family: 'Montserrat', sans-serif;
        width: 100px;
        justify-content: center;
        align-items: center;
        display: flex;
        font-size: large;
        margin-top: 40px;
        padding: 10px 50px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        text-decoration: none;

    }

    .collapse {
        font-family: 'Montserrat', sans-serif;
        justify-content: center;
        align-items: center;
        display: flex;
    }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="vl" href="{{ url('/') }}">Voltar ao início</a>
                </li>
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
