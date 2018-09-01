<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
      protected $fillable = [
        'product_id', 'panier_id', 'prix','qte'
    ];


    public function panier()
    {
        return $this->belongsTo('App\Panier');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
