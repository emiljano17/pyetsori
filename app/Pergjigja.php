<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pergjigja extends Model
{
    protected $guarded = [];

    public function pyetja(){
        return $this->belongsTo(Pyetja::class);
    }

    public function responses(){
        return $this->hasMany(SurveyResponse::class);
    }
}

