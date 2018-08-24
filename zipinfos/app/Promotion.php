<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model 
{

    protected $table = 'promotions';
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}