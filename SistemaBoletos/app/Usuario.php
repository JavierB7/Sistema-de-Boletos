<?php

namespace SistemaBoletos;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios'; 

    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable =[
    	'nombres',
    	'apellidos',
    	'cedula',
    	'direccion',
    	'sexo',
    	'telefono',
    	'email',
    	'usuario',
    	'password',
    ];

    protected $guarded = [
    	'admin'
    ];
}
