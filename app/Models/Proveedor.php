<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = "tbl_proveedor";
    protected $fillable = ['id', 'persona_id', 'nombre', 'estado', 'created_at', 'updated_at'];
}
