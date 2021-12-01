<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basis extends Model
{
   protected $table = 'basis_pengetahuan';
   protected $primaryKey ='kode_pengetahuan';
   protected $fillable = ['nama_kerusakan','nama_gejala','kode_kerusakan','kode_gejala','mb'];

   public function kerusakan()
   {
   	 return $this->belongsTo('App\Kerusakan','kode_kerusakan');
   }

   public function gejala()
   {
   	 return $this->belongsTo('App\Gejala','kode_gejala');
   }
}
