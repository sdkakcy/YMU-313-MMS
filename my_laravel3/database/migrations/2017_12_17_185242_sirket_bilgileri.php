<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SirketBilgileri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sirket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ad');
            $table->string('soyad');
            $table->string('eposta')->unique();
            $table->string('sifre');
            $table->integer('cep')->unique();
            $table->integer('tur');
            $table->string('ticari_unvan')->unique();
            $table->string('vergi_dairesi')->unique();
            $table->integer('TC')->unique();
            $table->integer('sabit_tel')->unique();
            $table->integer('sabit_tel2')->unique();
            $table->integer('konum_id');
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
        Schema::dropIfExists('sirket');
    }
}
