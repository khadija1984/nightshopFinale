<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visuel extends Model 
{

    protected $table = 'visuels';
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}