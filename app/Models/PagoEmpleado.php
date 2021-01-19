<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoEmpleado extends Model
{
    use HasFactory;
    protected $table = "tbl_pago_empleado";
    protected $fillable = ['id', 'empleado_id', 'nombre', 'cantidad', 'estado', 'created_at', 'updated_at'];
}
