<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id_prod',
		'nombre',
        'descripcion',
        'categoria',
        'precio',
        'existencias',
        'imagen'
	];

    
}
