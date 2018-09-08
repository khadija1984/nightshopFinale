<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

     protected $fillable = [
        'name', 'slug','description','prix','category_id',
     ];

     function setNameAttribute($value)
     {
         $this->attributes['name']=$value;
         $this->attributes['slug']=str_slug($value);
         
     }
     
     public function category()
     {
         return $this->belongsTo('App\Category');
     }
      public function visuels()
     {
         return $this->hasMany('App\Visuel');
     }
      public function promotions()
     {
         return $this->hasMany('App\Promotion');
     }
      public function tags()
     {
         return $this->belongsToMany('App\Tag');
     }
     function onDiscount(){
         return $this->promotions()
               ->where('started_at','<=',\Carbon\Carbon::now())
               ->where('finished_at','>=',\Carbon\Carbon::now())
               ->first();
         
     }
     function prixVente()
    {
        return $this->onDiscount()?$this->onDiscount()->prix:$this->prix;
    }
}
