<?php

namespace sisVeterinaria;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    //hace referncia a la tabla de la base de datos
    protected $table='propietario';
    protected $primaryKey = 'idpropietario';
    public $timestamps=false;


    protected $fillable=[
    	'nombre',
    	'ap_paterno',
    	'ap_materno',
    	'telf',
        'ci',
       	'direccion',
       	'rfid',
    ];

    protected $guarded=[

    ];
}
