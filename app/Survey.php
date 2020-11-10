<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded = [];

    public function pyetsori(){
        return $this->belongsTo(Pyetsori::class);
    }

    public function responses(){
        return $this->hasMany(SurveyResponse::class);
    }

}
