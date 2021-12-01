<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
   
 protected $table = 'hasil';
 protected $primaryKey ='id_hasil';


 public function kerusakan_ch()
   {
       return $this->belongsTo('App\Kerusakan','hasil_id','kode_kerusakan');
   }

   public function gejala_ch()
   {
   	 return $this->belongsTo('App\Gejala','hasil_id','kode_gejala');
   }
}