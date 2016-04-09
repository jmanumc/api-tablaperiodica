<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'atomo',
        'oxidacion',
        'simbolo',
        'nombre',
        'masa',
        'electrones',
        'tipo_id',
        'subtipo_id',
        'estado_id',
        'serie_id',
        'grupo_id',
        'bloque_id',
        'perido_id',
        'detalle_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Devuelve el tipo que al posee el elemento.
     */
    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    /**
     * Devuelve el subtipo al que posee el elemento.
     */
    public function subtipo()
    {
        return $this->belongsTo('App\Subtipo');
    }

    /**
     * Devuelve el eatado que al posee el elemento.
     */
    public function estado()
    {
        return $this->belongsTo('App\Estado');
    }

    /**
     * Devuelve la serie a la que posee el elemento.
     */
    public function serie()
    {
        return $this->belongsTo('App\Serie');
    }

    /**
     * Devuelve el grupo al que posee el elemento.
     */
    public function grupo()
    {
        return $this->belongsTo('App\Grupo');
    }

    /**
     * Devuelve la bloque al que posee el elemento.
     */
    public function bloque()
    {
        return $this->belongsTo('App\Bloque');
    }

    /**
     * Devuelve la periodo al que posee el elemento.
     */
    public function periodo()
    {
        return $this->belongsTo('App\Periodo');
    }

    /**
     * Devuelve los detalles del elemento.
     */
    public function detalle()
    {
        return $this->hasOne('App\Detalle');
    }
}
