<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servico;
use App\Models\Cliente;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::with('cliente')->get();
        return view('servicos.index', compact('servicos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('servicos.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'data' => 'required|date',
            'preco' => 'required|numeric|min:0',
            'descricao' => 'required|string',
        ]);

        Servico::create($request->all());

        return redirect()->route('servicos.index')->with('success', 'Serviço cadastrado com sucesso.');
    }

    public function edit(Servico $servico)
    {
        $clientes = Cliente::all();
        return view('servicos.edit', compact('servico', 'clientes'));
    }

    public function update(Request $request, Servico $servico)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'data' => 'required|date',
            'preco' => 'required|numeric|min:0',
            'descricao' => 'required|string',
        ]);

        $servico->update($request->all());

        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado com sucesso.');
    }

    public function destroy(Servico $servico)
    {
        $servico->delete();
        return redirect()->route('servicos.index')->with('success', 'Serviço excluído com sucesso.');
    }
}


