<?php

namespace App\Http\Controllers;

use App\Models\Compromisso;
use App\Models\Consultor;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CompromissoController extends Controller
{
    public function index(Request $request)
    {
        $compromissos = Compromisso::with('consultor');

        if ($request->has('data_inicio') && $request->has('data_fim')) {
            $compromissos->whereBetween('data', [$request->data_inicio, $request->data_fim]);
        }

        if ($request->has('consultor_id')) {
            $compromissos->where('consultor_id', $request->consultor_id);
        }

        $compromissos = $compromissos->get();

        // Calcula o total de horas e o valor total para cada compromisso
        foreach ($compromissos as $compromisso) {
            $horaInicio = Carbon::createFromFormat('H:i:s', $compromisso->hora_inicio);
            $horaFim = Carbon::createFromFormat('H:i:s', $compromisso->hora_fim);
            $intervalo = Carbon::createFromFormat('H:i:s', $compromisso->intervalo);

            $totalHoras = ($horaFim->diffInMinutes($horaInicio) - $intervalo->format('H') * 60 - $intervalo->format('i')) / 60;
            $compromisso->total_horas = $totalHoras;
            $compromisso->valor_total = $totalHoras * $compromisso->consultor->valor_hora;
        }

        // Calcula o totalizador geral
        $totalHorasGeral = $compromissos->sum('total_horas');
        $valorTotalGeral = $compromissos->sum('valor_total');

        return view('compromissos.index', compact('compromissos', 'totalHorasGeral', 'valorTotalGeral'));
    }


    public function create()
    {
        $consultores = Consultor::all();
        return view('compromissos.create', compact('consultores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'consultor_id' => 'required|exists:consultores,id',
            'data' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fim' => 'required|date_format:H:i',
            'intervalo' => 'required|date_format:H:i',
        ]);

        Compromisso::create($request->all());

        return redirect()->route('compromissos.index');
    }

    public function edit(Compromisso $compromisso)
    {
        $consultores = Consultor::all();
        return view('compromissos.edit', compact('compromisso', 'consultores'));
    }

    public function update(Request $request, Compromisso $compromisso)
    {
        $request->validate([
            'consultor_id' => 'required|exists:consultores,id',
            'data' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fim' => 'required|date_format:H:i',
            'intervalo' => 'required|date_format:H:i'
    ]);

        $compromisso->update([
            'consultor_id' => $request->consultor_id,
            'data' => $request->data,
            'hora_inicio' => $request->hora_inicio,
            'hora_fim' => $request->hora_fim,
            'intervalo' => $request->intervalo,
    ]);

    return redirect()->route('compromissos.index')->with('success', 'Compromisso atualizado com sucesso!');
}

    public function destroy(Compromisso $compromisso)
    {
        $compromisso->delete();
        return redirect()->route('compromissos.index');
    }
}
