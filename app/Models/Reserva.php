<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = "tbl_reserva";
    protected $fillable = ['id', 'cliente_id', 'nombre', 'fecha', 'estado', 'created_at', 'updated_at'];
}
