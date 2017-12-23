->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sube extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sube', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sube_kodu')->unique()->nullable();
            $table->string('sube_adi')->nullable();
          
            $table->string('eposta')->unique()->nullable();
          
            $table->integer('konum_id')->nullable();
            $table->integer('sirket_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sube');
    }
}
