<?php

namespace sisVeterinaria;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table      = 'servicio';
    protected $primaryKey = 'idservicio';
    public $timestamps    = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'frecuencia',
    ];

    protected $guarded = [

    ];
}
