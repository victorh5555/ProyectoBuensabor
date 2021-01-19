<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngMenu extends Model
{
    use HasFactory;
    protected $table = "tbl_ing_menu";
    protected $fillable = ['id', 'menu_id', 'nombre', 'estado', 'created_at', 'updated_at'];
}
