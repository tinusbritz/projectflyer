<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flyer extends Model {
    protected $fillable = [
        'street',
        'city',
        'state',
        'zip',
        'country',
        'description',
        'price'
    ];

    public function photos()
    {

        return $this->hasMany('App\Photo');
    }
}
