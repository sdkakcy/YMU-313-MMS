<?php

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
            $table->string('sube_kodu')->unique();
            $table->string('sube_adi');
            $table->string('sifre');
            $table->integer('konum_id');
            $table->integer('sirket_id');
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
