<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasi';

    public function Kamar(){
    	return $this->belongsTo(kamars::class);
    }
}
