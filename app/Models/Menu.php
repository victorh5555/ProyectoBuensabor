<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "tbl_menu";
    protected $fillable = ['id', 'cliente_id', 'nombre', 'estado', 'created_at', 'updated_at'];
}
