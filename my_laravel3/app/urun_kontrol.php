<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urun_kontrol extends Model
{
  protected $table='urun_kontrol';
  protected $fillable=['urun_barkod','urun_fiyat','sube_id','urun_id'];
}
