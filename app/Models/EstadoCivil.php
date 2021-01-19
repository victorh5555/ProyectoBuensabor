<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;
    protected $table = "tbl_estado_civil";
    protected $fillable = ['id', 'nombre', 'estado', 'created_at', 'updated_at'];
}
