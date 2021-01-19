<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoCliente extends Model
{
    use HasFactory;
    protected $table = "tbl_pago_cliente";
    protected $fillable = ['id', 'pedido_id', 'nombre', 'monto', 'estado', 'created_at', 'updated_at'];
}
