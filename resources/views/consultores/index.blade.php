@extends('layouts.app')

@section('content')


<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js" defer></script>

<style>

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: white;
        text-align: center;
    }


    .nm {
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
    <h1>Consultores</h1>
    <a href="{{ route('consultores.create') }}" class="add">Adicionar Consultor</a>
    <table class="table mt-3">
        <thead >
            <tr class="box">
                <th class="nm">Nome Completo</th>
                <th class="hr">Valor Hora</th>
                <th class="ac">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultores as $consultore)
            <tr class="box-cl">
                <td>{{ $consultore->nome_completo }}</td>
                <td>{{ $consultore->valor_hora }}</td>
                <td>
                    <a href="{{ route('consultores.edit', $consultore) }}" class="ed">Editar</a>
                    <form action="{{ route('consultores.destroy', $consultore) }}" method="POST" style="display:inline;">
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
