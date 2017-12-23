->nullable()<?php

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
            $table->string('ad')->nullable();
            $table->string('soyad')->nullable();
            $table->string('eposta')->unique()->nullable();
            $table->integer('cep')->unique()->nullable();
            $table->integer('tur')->nullable();
            $table->string('ticari_unvan')->unique()->nullable();
            $table->string('vergi_dairesi')->unique()->nullable();
            $table->integer('TC')->unique()->nullable();
            $table->integer('sabit_tel')->unique()->nullable();
            $table->integer('sabit_tel2')->unique()->nullable();
            $table->integer('konum_id')->nullable();
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
