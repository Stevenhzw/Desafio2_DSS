<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id_usu
 * @property string $nombre
 * @property string $apellido
 * @property int $edad
 * @property string $usuario
 * @property string $contra
 * @property int $estado
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id_usu';
	public $timestamps = false;

	protected $casts = [
		'edad' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'edad',
		'usuario',
		'contra',
		'estado'
	];
}
