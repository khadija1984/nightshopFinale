<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function paniers()
    {
        return $this->hasMany('App\Panier');
    }

    public function likes()
    {
        return $this->belongsToMany('App\Product');
    }

}