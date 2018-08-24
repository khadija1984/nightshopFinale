<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiment extends Model 
{

    protected $table = 'paiements';
    public $timestamps = true;

    public function panier()
    {
        return $this->belongsTo('App\Panier');
    }

}