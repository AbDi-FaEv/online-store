<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
      'name',
    ];

    public function types() {
        return $this->hasMany('App\Type');
    }

    public function covers() {
        return $this->belongsToMany('App\Cover', 'device_cover');
    }
}
