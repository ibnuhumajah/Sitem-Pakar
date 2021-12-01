<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Riwayat extends Model
{

  protected $table = 'hasil';
  protected $primaryKey = 'id_hasil';


  public function kerusakan_ch()
  {
    return $this->belongsTo('App\Kerusakan', 'hasil_id', 'kode_kerusakan');
  }

  public function gejala_ch()
  {
    return $this->belongsTo('App\Gejala', 'hasil_id', 'kode_gejala');
  }
}
