<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function Survey(){
        return $this->belongsTo('App\Survey');
    }

    public function Answer(){
        return $this->hasMany('App\Answer');
    }
}
