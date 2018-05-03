<?php

namespace sisVeterinaria;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
     //hace referncia a la tabla de la base de datos
    protected $table='tipo';
    protected $primaryKey = 'idtipo';
    public $timestamps=false;


    protected $fillable=[
    	'cargo',
    ];

    protected $guarded=[

    ];
}
