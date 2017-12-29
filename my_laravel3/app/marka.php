<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marka extends Model
{
  protected $table='marka';
protected $fillable=['marka_adi','kategori_id'];
}
