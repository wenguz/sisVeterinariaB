<?php

namespace sisVeterinaria;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //hace referncia a la tabla de la base de datos
    protected $table='personal';
    protected $primaryKey = 'idpersonal';
    public $timestamps=false;


    protected $fillable=[
    	'nombre',
    	'ap_paterno',
    	'ap_materno',
        'ci',
       	'telf',
    	'direccion',
    ];

    protected $guarded=[

    ];

}
