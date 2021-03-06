<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function municipios(){
    	return $this->hasMany('App\Municipios');
    }
}
