<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id', 'nom', 'email','objet','content','reponse_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
