<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
    ];

    public function covers() {

        return $this->hasMany('App\Cover');
    }
}
