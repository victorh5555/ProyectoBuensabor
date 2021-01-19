<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DespensaIns extends Model
{
    use HasFactory;
    protected $table = "tbl_despensa_ins";
    protected $fillable = ['id', 'recarga_stock_id', 'nombre', 'cantidad', 'fecha', 'estado', 'estado', 'created_at', 'updated_at'];
}
