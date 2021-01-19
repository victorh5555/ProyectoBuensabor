<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\EstadoCivil;

class clienteController extends Controller
{
    public function index(){
        $clientes = Cliente::paginate(5);
        return view('cliente/index')->with('clientes', $clientes);
    }

    public function create(){
        $estadoCivil = EstadoCivil::all();
        return view('cliente/create')->with('estadoCivil', $estadoCivil);    
    }

    public function store(Request $request){
        //dd($request);
        $cliente = new Cliente($request->all());
        $cliente->save();
        return redirect()->route('cliente.index', $cliente->id);
    }

    public function show(Request $request, $id){
        $cliente = Cliente::find($id);
        $estadoCivil = EstadoCivil::all();
          return view('cliente.show')->with('cliente', $cliente)
            ->with('estadoCivil',$estadoCivil);
    }

    public function edit(Request $request, $id){
        $cliente = Cliente::find($id);
        $estadoCivil = EstadoCivil::all();
          return view('cliente.edit')->with('cliente', $cliente)
            ->with('estadoCivil',$estadoCivil);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->ci = $request->input('ci');
        $cliente->direccion = $request->input('direccion');
        $cliente->celular = $request->input('celular');
        $cliente->fecha_nac = $request->input('fecha_nac');
        $cliente->estado_civil_id = $request->input('estado_civil_id');

        $cliente->save();

        return redirect()->route('cliente.index', $cliente->id);
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.index', $cliente->id);
    }
}


