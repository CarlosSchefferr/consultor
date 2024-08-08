<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Projeto Consultores</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js" defer></script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            text-align: center;

        }
        .hero {
            margin-bottom: 20px;
        }
        .hero img {
            max-width: 30%;
            height: auto;
            
        }


        .dese {
            font-size: large;
            font-weight: bold;
            text-decoration: none;
           
            
            
            
        }

        .a {
            color: #007bff;
            text-decoration: none;
        }

        .a:hover 
        {
            color: #0056b3;
            text-decoration: none;

        }

      

        .btn-primary {
            font-size: large;
        }
        .btn-primary:hover {
            color: black;
            font-size: large;
            
        }

        .gerenciar {
            font-size: large;
            padding: 10px 50px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }


        .gerenciar:hover {
            background-color: #0056b3;
            color: white;
        }

        .lead {
            font-size: 1.5rem;
            color: black
            
             
        }

        .display-4 {
            font-size: 3rem;
            
        }
    </style>
</head>
<body>
    <div class="container overflow-hidden text-center">
        <div class="hero">
            <h1 class="display-4">Bem-vindo ao Projeto Consultores</h1>
            <p class="lead">Gerencie seus consultores e compromissos de forma simples e eficiente.</p>
            <img src="https://cdn-icons-png.flaticon.com/512/11145/11145573.png" alt="Imagem de Boas-Vindas">
        </div>
        <div class="col">
            <a href="{{ route('consultores.index') }}" class="gerenciar">Gerenciar Consultores e Compromissos</a>
        </div>
        <p class="dese">Desenvolvido por: <a class="a" href="https://github.com/CarlosSchefferr">Carlos Augusto</a></p>
    </div>
</body>
</html>
