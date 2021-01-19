<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = "tbl_roles";
    protected $fillable = ['id', 'users_id', 'nombre', 'estado', 'created_at', 'updated_at'];
}
