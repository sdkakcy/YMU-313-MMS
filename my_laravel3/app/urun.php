<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urun extends Model
{
  protected $table='urun';
protected $fillable=['urun_barkod','urun_adi','urun_agirligi','urun_adet','marka_id'];
}
