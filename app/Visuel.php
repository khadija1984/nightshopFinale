<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visuel extends Model
{

     protected $fillable = [
        'name', 'url', 'product_id',
     ];

     function products()
     {
         return $this->belongsTo('App\Product');
     }
}
