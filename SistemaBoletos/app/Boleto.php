<?php

namespace SistemaBoletos;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    protected $table = 'boletos'; 

    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable =[
    	'serial',
    	'evento',
    	'fecha',
    	'ubicacion',
    	'usuario',
    ];

    protected $guarded = [
    ];
}
