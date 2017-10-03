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
}
