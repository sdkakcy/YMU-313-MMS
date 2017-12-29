<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UrunKontrol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_kontrol', function (Blueprint $table) {
            $table->increments('id');
            $table->string('urun_barcod')->nullable();
            $table->float('urun_fiyat',11,2)->nullable();
            $table->integer('sube_id');
            $table->integer('urun_id');

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
        Schema::dropIfExists('urun_kontrol');
    }
}
