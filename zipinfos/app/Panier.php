<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model 
{

    protected $table = 'paniers';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function lines()
    {
        return $this->hasMany('App\Line');
    }

    public function paiement()
    {
        return $this->hasOne('App\Paiment');
    }

}