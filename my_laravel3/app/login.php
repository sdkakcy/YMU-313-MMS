<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table='login';
	protected $fillable=['ad','eposta','sifre','yetki'];
}
