<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    public function transaksi(){
    	return $this->hasMany('App\Transaksi'); 
    }
}
