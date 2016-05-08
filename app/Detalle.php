<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'elemento_id', 'aplicacion', 'impacto', 'imagen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Devuelve el elemento por detalle.
     */
    public function elemento()
    {
        return $this->belongsTo('App\Elemento');
    }
}
