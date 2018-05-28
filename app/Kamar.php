<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    public function Reservasi(){
    	return $this->hasMany(reservasi::class);
    }
}
