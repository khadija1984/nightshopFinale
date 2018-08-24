<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $fillable = [
        'name', 'slug',
     ];

     public function setNameAttribute($value)
     {
         $this->attributes['name']=$value;
         $this->attributes['slug']=str_slug($value);
         
     }
     
     function products()
     {
         return $this->belongsToMany('App\Product');
     }
}
