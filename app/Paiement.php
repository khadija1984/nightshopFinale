<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
     protected $fillable = [
        'panier_id', 'data','type',
    ];

    public function panier()
    {
        return $this->belongsTo('App\Panier');
    }
}
