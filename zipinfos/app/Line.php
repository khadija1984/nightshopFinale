<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model 
{

    protected $table = 'lines';
    public $timestamps = true;

    public function panier()
    {
        return $this->belongsTo('App\Panier');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}