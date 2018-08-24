<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

     protected $fillable = [
        'name', 'slug','description','prix','image','category_id',
     ];

     function setNameAttribute($value)
     {
         $this->attributes['name']=$value;
         $this->attributes['slug']=str_slug($value);
         
     }
     
     public function category()
     {
         return $this->belongsToMany('App\Category');
     }
      public function visuels()
     {
         return $this->hasMany('App\Visuel');
     }
      public function tags()
     {
         return $this->belongsToMany('App\Tag');
     }
}
