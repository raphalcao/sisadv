<?php

namespace App\Http\Controllers;

use App\Models\Reu;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ClientesController extends Controller
{

    public function index(Request $request)
    {
        //$clientes = Cliente::oldest('id')->get();
        //$clientes = Cliente::query()->orderBy('id')->get();
        $data_atual = date('Y/m/d'); 
        
        if ($request->route()->named('audiencia_realizada')) {
            $clientes = Cliente::where('data_audiencia', '<=', $data_atual)->get();
        }else{
            $clientes = Cliente::where('data_audiencia', '>=', $data_atual)->get();
        }
        
        return view('clientes.index_clientes', compact('clientes'));
    }

    public function create()
    {
        $reus = Reu::query()->orderBy('id')->get();
        return view('clientes.create_clientes', compact('reus'));
    }

    public function store(Request $request)
    {
        $user = Cliente::create([
            'nome' => $request['nome'],
            'email' => $request['email'],
            'reu_id' => $request['reu_id'],
            'numero_processo' => $request['processo'],
            'telefone' => $request['telefone'],
            'observacao' => $request['observacao'],
            'data_audiencia' => $request['data_audiencia']
        ]);

        if ($request['data_audiencia'] < date('Y/m/d')){
            echo'Digite uma data superior';
        }

        return redirect()->route('index');
    }

    public function editar(int $id)
    {
        $dados = Cliente::find($id);
        $reus = Reu::query()->orderBy('id')->get();
        return view('clientes.edit_clientes', compact('dados', 'reus'));
    }

    public function update(Request $request)
    {
        $pessoa = Cliente::find($request->id);
        $pessoa->update($request->all());
        return redirect()->route('index');
    }
}
