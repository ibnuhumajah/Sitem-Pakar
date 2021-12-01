<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
   protected $table = 'hasil';
   protected $primaryKey = 'id_hasil';
   protected $fillable = ['nama_user', 'tanggal', 'kerusakan', 'gejala', 'hasil_id', 'hasil_nilai'];

   public function kerusakan()
   {
      return $this->belongsTo('App\Kerusakan', 'kode_kerusakan');
   }
}
