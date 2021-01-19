<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use Carbon\Carbon;

class userController extends Controller

{

    public function exportar(){
        $usuarios = User::all();
        $fecha_actual = Carbon::now(); 
        view()->share('usuarios', $usuarios);
        view()->share('fecha_actual', $fecha_actual);
        $pdf = PDF::loadView('user.exportar', [$usuarios, $fecha_actual]);

        return $pdf->download('lista_usuario.pdf');
    }

    public function index(){
        $usuarios = User::all();
        //$usuarios = User::where('tipousuario_id', 4)->get();
        return view('user.index')->with('usuarios', $usuarios);
    }

}

