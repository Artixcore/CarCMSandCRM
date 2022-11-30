<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarSell extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}
