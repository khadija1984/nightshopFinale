<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'categories';
     
     protected $fillable = [
        'name', 'slug',
     ];

     function setNameAttribute($value)
     {
         $this->attributes['name']=$value;
         $this->attributes['slug']=str_slug($value);
         
     }
     
     public function products()
     {
         return $this->hasMany('App\Product');
     }
     
}