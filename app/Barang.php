<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'kode_barang';
    protected $fillable =['nama_barang','merk','type','harga','stok'];
    
    public function transaksi(){
    	return $this->hasMany('App\Transaksi');
    }
}
