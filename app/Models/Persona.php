<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = "tbl_persona";
    protected $fillable = ['id', 'nombre', 'apellido', 'ci', 'direccion', 'celular', 'fecha_nac',  'correo', 'estado_civil_id', 'estado', 'created_at', 'updated_at'];

    public function estadoCivil()
    {
        return $this->belongsTo('App\EstadoCivil', 'estado_civil_id');
    }

}
