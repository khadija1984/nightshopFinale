<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
     protected $fillable = [
        'user_id', 'total','subtotal' 
    ];

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
