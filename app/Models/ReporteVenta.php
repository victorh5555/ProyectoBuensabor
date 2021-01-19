<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteVenta extends Model
{
    use HasFactory;
    protected $table = "tbl_reporte_venta";
    protected $fillable = ['id', 'venta_id', 'nombre', 'fecha', 'estado', 'created_at', 'updated_at'];
}
