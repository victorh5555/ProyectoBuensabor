<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "tbl_pedido";
    protected $fillable = ['id', 'cliente_id', 'nombre', 'fecha', 'estado', 'created_at', 'updated_at'];
}
