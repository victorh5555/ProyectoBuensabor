<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\EstadoCivil;

class personaController extends Controller
{
    public function index(){
        $personas = Persona::paginate(5);
        return view('persona/index')->with('personas', $personas);
    }

    public function create(){
        $estadoCivil = EstadoCivil::all();
        return view('persona/create')->with('estadoCivil', $estadoCivil);    
    }

    public function store(Request $request){
        //dd($request);
        $persona = new Persona($request->all());
        $persona->save();
        return redirect()->route('persona.index', $persona->id);
    }

    public function show(Request $request, $id){
        $persona = Persona::find($id);
        $estadoCivil = EstadoCivil::all();
          return view('persona.show')->with('persona', $persona)
            ->with('estadoCivil',$estadoCivil);
    }

    public function edit(Request $request, $id){
        $persona = Persona::find($id);
        $estadoCivil = EstadoCivil::all();
          return view('persona.edit')->with('persona', $persona)
            ->with('estadoCivil',$estadoCivil);
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->ci = $request->input('ci');
        $persona->direccion = $request->input('direccion');
        $persona->celular = $request->input('celular');
        $persona->fecha_nac = $request->input('fecha_nac');
        $persona->estado_civil_id = $request->input('estado_civil_id');
        $persona->save();

        return redirect()->route('persona.index', $persona->id);
    }

    public function destroy($id){
        $persona = Persona::find($id);
        $persona->delete();
        return redirect()->route('persona.index', $persona->id);
    }
}

