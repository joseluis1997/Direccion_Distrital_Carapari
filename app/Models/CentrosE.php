<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentrosE extends Model
{
    //use HasFactory;
    protected $table = 'centros_educacion';
    protected $fillable = [
        'nombreUE',
        'nombreDir',
        'nombreJE',
        'codigosie',
        'nivelEd',
        'cantidadE',
        'cantidadM',
        'descripcionG',
    ];
}
