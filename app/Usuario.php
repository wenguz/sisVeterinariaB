<?php

namespace sisVeterinaria;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //hace referncia a la tabla de la base de datos
    protected $table='usuario';
    protected $primaryKey = 'idusuario';
    public $timestamps=false;


    protected $fillable=[
    	'usuario',
    	'pass',
    	'idpersonal',
        'idtipo',
    ];

    protected $guarded=[

    ];
}
