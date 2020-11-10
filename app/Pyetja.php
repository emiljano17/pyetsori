<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pyetja extends Model
{
    protected $guarded = [];

    public function pyetsori(){
        return $this->belongsTo(Pyetsori::class);
    }

    public function pergjigjet(){
        return $this->hasMany(Pergjigja::class);
    }
}
