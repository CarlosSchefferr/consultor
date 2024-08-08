@extends('layouts.app')

@section('content')



<head>
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
        
        .form-control {
            font-size: large;

            border-radius: 5px;
            border: 1px solid #007bff;
        }
        .salvar {
            font-size: large;
            padding: 3px 30px;
            background-color: green;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .form-group {
            margin-bottom: 20px;
            
            
        }

        .text {
            font-size: large;
            font-weight: bold;
            text-decoration: none;
        }

        .inputtext {
            font-size: large;

            border-radius: 5px;
            border: 1px solid #007bff;
        }

        .box {
            background-color: black;
            z-index: 1;
            width: 200px;
            border-radius: 20px;
            padding: 10px;
            height: 210px;
            color : white;
            border: 3px solid #007bff;
            
        }

    </style>
</head>

<div class="container">
    <h1>{{ isset($compromisso) ? 'Editar Compromisso' : 'Adicionar Compromisso' }}</h1>
    <form class="box" action="{{ isset($compromisso) ? route('compromissos.update', $compromisso->id) : route('compromissos.store') }}" method="POST">
        @csrf
        @if(isset($compromisso))
            @method('PUT')
        @endif
        <div class="form-group">
            <label class="text" for="consultor_id">Consultor</label>
            <select class="form-control" id="consultor_id" name="consultor_id" required>
                @foreach($consultores as $consultor)
                <option value="{{ $consultor->id }}" {{ isset($compromisso) && $compromisso->consultor_id == $consultor->id ? 'selected' : '' }}>{{ $consultor->nome_completo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="text" for="data">Data</label>
            <input class="inputtext" type="date" class="form-control" id="data" name="data" value="{{ old('data', $compromisso->data ?? '') }}" required>
        </div>
        <div class="form-group">
            <label class="text" for="hora_inicio">Hora Início</label>
            <input class="inputtext" type="time" class="form-control" id="hora_inicio" name="hora_inicio" value="{{ old('hora_inicio', $compromisso->hora_inicio ?? '') }}" required>
        </div>
        <div class="form-group">
            <label class="text" for="hora_fim">Hora Fim</label>
            <input class="inputtext" type="time" class="form-control" id="hora_fim" name="hora_fim" value="{{ old('hora_fim', $compromisso->hora_fim ?? '') }}" required>
        </div>
        <div class="form-group">
            <label class="text" for="intervalo">Intervalo</label>
            <input class="inputtext" type="time" class="form-control" id="intervalo" name="intervalo" value="{{ old('intervalo', $compromisso->intervalo ?? '') }}" required>
        </div>
        <button type="submit" class="salvar">{{ isset($compromisso) ? 'Atualizar' : 'Salvar' }}</button>
    </form>
</div>
@endsection
