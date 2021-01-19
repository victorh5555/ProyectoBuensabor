<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecargaStock extends Model
{
    use HasFactory;
    protected $table = "tbl_recarga_stock";
    protected $fillable = ['id', 'despensa_ins_id', 'nombre', 'cantidad', 'fecha', 'estado', 'created_at', 'updated_at'];
}
