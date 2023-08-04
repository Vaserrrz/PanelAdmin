<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $nombre
 * @property $cedula
 * @property $direccion
 * @property $telef1
 * @property $telef2
 * @property $whatsapp
 * @property $telegram
 * @property $correo
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cedula' => 'required',
		'telef1' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cedula','direccion','telef1','telef2','whatsapp','telegram','correo','tipo'];



}
