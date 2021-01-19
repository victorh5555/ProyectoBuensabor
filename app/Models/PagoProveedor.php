<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoProveedor extends Model
{
    use HasFactory;
    protected $table = "tbl_pago_proveedor";
    protected $fillable = ['id', 'proveedor_id', 'nombre', 'fecha', 'monto', 'estado', 'created_at', 'updated_at'];
}
