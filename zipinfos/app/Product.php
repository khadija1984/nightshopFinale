<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{

    protected $table = 'products';
    public $timestamps = true;

    public function lines()
    {
        return $this->hasMany('App\Line');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function promotions()
    {
        return $this->hasMany('App\Promotion');
    }

    public function liked()
    {
        return $this->belongsToMany('App\User');
    }

    public function visuels()
    {
        return $this->hasMany('App\Visuel');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

}