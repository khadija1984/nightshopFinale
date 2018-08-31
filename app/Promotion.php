<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $dates = [
        'started_at', 
        'finished_at',
     ];
    protected $fillable = [
        'product_id', 'prix',
     ];
     public function product(){
         return $this->belongsTo('App\Product');
     }
}
