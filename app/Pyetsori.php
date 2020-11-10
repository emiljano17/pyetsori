<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pyetsori extends Model
{
    protected $guarded = [];

    public function path(){
        return url('/pyetsori/'. $this->id);
    }

    public function pathDeleted(){
        return url('/pyetsori');
    }

    public function publicPath(){
        return url('/surveys/'.$this->id.'-'.Str::slug($this->title));
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pyetjet(){
        return $this->hasMany(Pyetja::class);
    }

    public function surveys(){
        return $this->hasMany(Survey::class);
    }
}
