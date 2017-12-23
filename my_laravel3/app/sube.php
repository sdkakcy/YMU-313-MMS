<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sube extends Model
{
    protected $table='sube';
	protected $fillable=['sube_kodu','sube_adi','sifre','konum_id','sirket_id'];
}