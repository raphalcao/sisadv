<?php

namespace App\Http\Controllers;
use App\Models\Reu;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ReusController extends Controller
{
    public function index()
    {
        $reus = Reu::query()->orderBy('id')->get();
        return view('reus.index_reus', compact('reus'));
    }

    
    public function create() 
    {     

        $dados = Reu::query()->orderBy('id')->get();
        return view('reus.create_reus', compact('dados'));     

    }

    public function store(Request $request) 
    {        
       $user = Reu::create([
            'nome' => $request['nome'],
            //'cliente_id' => $request['cliente_id']
        ]);
        
        return redirect()->route('index_reu');

    }

    public function editar(int $id)
    {
       $dados = Reu::find($id);
        return view('reus.edit_reus', compact('dados'));
    }

    public function update(Request $request)
    {
        $pessoa = Reu::find($request->id);
        $pessoa->update($request->all());
        return redirect()->route('index_reu');
    }



}