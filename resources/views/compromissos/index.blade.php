@extends('layouts.app')

@section('content')

<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .container {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            text-align: center;
        }



    .dt {
        font-size: large;
        font-weight: bold;
        text-decoration: none;
        padding : 30px;
    }

    .hr {
        font-size: large;
        font-weight: bold;
        text-decoration: none;
        padding : 30px;
    }

    .ac {
        font-size: large;
        font-weight: bold;
        text-decoration: none 
        padding : 30px;
    }


    .box {
        background-color: black;
        z-index: 1;
        width: 1px;
        padding: 10px;
        height: 10px;
        color : white;
        
    }


    .add {
        font-size: large;
        padding: 10px 60px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        text-decoration: none;

    }

    .add:hover {
        background-color: #0056b3;
        font-size: large;
    }


    .ex {
        
        padding: 10px 30px;
        background-color: red;
        color: white;
        border-radius: 5px;
        text-decoration: none;
    }


    .ex:hover {
        background-color: white;
        color: red;
        cursor: pointer;
    }


    .ed {
        padding: 10px 30px;
        background-color: yellow;
        color: black;
        border-radius: 5px;
        text-decoration: none;
        border: 1px solid black;
    }

    .ed:hover {
        background-color: black;
        color: yellow;
        cursor: pointer;
    }


    .box-cl {
        background-color: black;
        z-index: 1;
        width: 1px;
        padding: 10px;
        height: 10px;
        color : white;
    }

    

    </style>
</head>


<div class="container">
    <h1>Compromissos</h1>
    <a href="{{ route('compromissos.create') }}" class="add">Adicionar Compromisso</a>
    <table class="table mt-3">
        <thead>
            <tr class="box">
                <th class="dt">Data</th>
                <th>Consultor</th>
                <th>Hora Início</th>
                <th>Hora Fim</th>
                <th>Intervalo</th>
                <th>Total de Horas</th>
                <th>Valor Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="box-cl">
            @foreach ($compromissos as $compromisso)
            <tr>
                <td>{{ \Carbon\Carbon::parse($compromisso->data)->format('d/m/Y') }}</td>
                <td>{{ $compromisso->consultor->nome_completo }}</td>
                <td>{{ $compromisso->hora_inicio }}</td>
                <td>{{ $compromisso->hora_fim }}</td>
                <td>{{ $compromisso->intervalo }}</td>
                <td>{{ number_format($compromisso->total_horas, 2) }} horas</td>
                <td>R$ {{ number_format($compromisso->valor_total, 2) }}</td>
                <td>
                    <a href="{{ route('compromissos.edit', $compromisso) }}" class="ed">Editar</a>
                    <form action="{{ route('compromissos.destroy', $compromisso) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ex">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
