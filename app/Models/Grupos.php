<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $fillable = ['id_usr','categoria','email','nome'];

    use HasFactory;
}
