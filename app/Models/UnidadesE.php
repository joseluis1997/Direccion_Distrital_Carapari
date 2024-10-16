<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UnidadesE extends Model
{
    protected $table = 'unidades_ed';
    protected $primaryKey = 'id';
    //use HasFactory;
    protected $fillable = [
        'nombreUE',
        'nombreDir',
        'nombreJE',
        'codigosie',
        'nivelEd',
        'cantidadE',
        'cantidadM',
        'descripcionG'
    ];
    public function Nucleo(){
        return $this->belongsTo(Nucleo::class, 'id_nucleo');
   }
}
