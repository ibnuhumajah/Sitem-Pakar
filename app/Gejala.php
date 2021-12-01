<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Gejala extends Model
{
    protected $table = 'gejala';
    protected $primaryKey ='kode_gejala';
    protected $fillable = ['nama_gejala'];

     public function basis()
   {
   	 return $this->hasMany(Basis::class);
   }

    public function riwayat()
   {
     return $this->hasMany(Riwayat::class);
   }
}
