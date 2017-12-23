<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sirket extends Model
{
    protected $table='sirket';
	protected $fillable=['ad','soyad','eposta','sifre','cep','tur','ticari_unvan','vergi_dairesi','TC','sabit_tel','sabit_tel2','konum_id'];
}
