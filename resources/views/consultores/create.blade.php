@extends('layouts.app')

@section('content')

<head>

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


        .salvar {
            font-size: large;
            padding: 3px 30px;
            background-color: green;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .salvar:hover {
            background-color: white;
            color: green;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form {
            font-size: large;

            border-radius: 5px;
            border: 1px solid #007bff;
        }

        .text {
            font-size: large;
            font-weight: bold;
            text-decoration: none;
        }

    </style>

</head>


<div class="container">
    <h1>{{ isset($consultor) ? 'Editar Consultor' : 'Adicionar Consultor' }}</h1>
    <form action="{{ isset($consultor) ? route('consultores.update', $consultor) : route('consultores.store') }}" method="POST">
        @csrf
        @if(isset($consultor))
            @method('PUT')
        @endif
        <div class="form-group">
            <label class="text" for="nome_completo">Nome Completo</label>
            <input class="form" type="text" class="form-control" id="nome_completo" name="nome_completo" value="{{ old('nome_completo', $consultor->nome_completo ?? '') }}" required>
        </div>
        <div class="form-group">
            <label class="text" for="valor_hora">Valor Hora</label>
            <input class="form" type="number" class="form-control" id="valor_hora" name="valor_hora" step="0.01" value="{{ old('valor_hora', $consultor->valor_hora ?? '') }}" required>
        </div>
        <button type="submit" class="salvar">{{ isset($consultor) ? 'Atualizar' : 'Salvar' }}</button>
    </form>
</div>
@endsection
