<?php

namespace App\Http\Controllers;

use App\Models\Consultor;
use Illuminate\Http\Request;

class ConsultorController extends Controller
{
    public function index(Request $request)
    {
        $consultores = Consultor::query();

        if ($request->has('nome_completo')) {
            $consultores->where('nome_completo', 'like', '%' . $request->nome_completo . '%');
        }

        return view('consultores.index', ['consultores' => $consultores->get()]);
    }

    public function create()
    {
        return view('consultores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_completo' => 'required|string',
            'valor_hora' => 'required|numeric'
        ]);

        Consultor::create($request->all());

        return redirect()->route('consultores.index');
    }

    public function edit(Consultor $consultore)
    {
        return view('consultores.edit', compact('consultore'));
    }

    public function update(Request $request, Consultor $consultore)
    {
        $request->validate([
            'nome_completo' => 'required|string',
            'valor_hora' => 'required|numeric'
        ]);

        $consultore->update($request->all());

        return redirect()->route('consultores.index');
    }

    public function destroy(Consultor $consultore)
    {
        if ($consultore->compromissos()->count() > 0) {
            return redirect()->route('consultores.index')->with('error', 'Não é possível excluir um consultor vinculado a compromissos.');
        }

        $consultore->delete();
        return redirect()->route('consultores.index');
    }
}

