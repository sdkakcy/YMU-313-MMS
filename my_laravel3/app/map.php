<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class map extends Model
{
  protected $table='konum';
protected $fillable=['lat','lon'];
}
