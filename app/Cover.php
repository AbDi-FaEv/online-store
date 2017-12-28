<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    protected $fillable = [
      'name', 'price',
    ];

    public function material() {

        return $this->belongsTo('App\Material');
    }

    public function devices() {

        return $this->belongsToMany('App\Device', 'device_cover');
    }

    public function users() {

        return $this->belongsToMany('App\User', 'user_cover');
    }
}
