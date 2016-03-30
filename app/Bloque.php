<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'letra',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Devuelve los elementos por bloque.
     */
    public function elementos()
    {
        return $this->hasMany('App\Elemento');
    }
}
