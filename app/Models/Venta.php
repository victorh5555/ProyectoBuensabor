<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = "tbl_venta";
    protected $fillable = ['id', 'nombre', 'estado', 'created_at', 'updated_at'];
}
