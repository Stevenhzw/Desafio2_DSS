<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property string $id_prod
 * @property string $nombre
 * @property string $descripcion
 * @property int $categoria
 * @property string $precio
 * @property int $existencias
 * @property string $imagen
 * 
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'id_prod';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'categoria' => 'int',
		'existencias' => 'int'
	];

	protected $fillable = [
		'id_prod',
		'nombre',
		'descripcion',
		'categoria',
		'precio',
		'existencias',
		'imagen'
	];

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'categoria');
	}
}
