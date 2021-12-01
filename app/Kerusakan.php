<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    protected $table = 'kerusakan';
    protected $primaryKey ='kode_kerusakan';
    protected $fillable = ['nama_kerusakan','det_kerusakan','srn_kerusakan'];

     public function basis()
   {
   	 return $this->hasMany(Basis::class);
   }

   public function hasil()
   {
   	 return $this->hasMany(Hasil::class);
   }

   public function riwayat()
   {
     return $this->hasMany(Riwayat::class);
   }
    
}
