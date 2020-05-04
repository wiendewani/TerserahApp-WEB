<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';
    protected $primaryKey = 'kode_pembeli';
    protected $fillable =['nama_pembeli','jenis_kelamin','kota','alamat'];
    
    public function transaksi(){
    	return $this->hasMany('App\Transaksi');
    }
}
