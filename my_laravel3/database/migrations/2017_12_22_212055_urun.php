<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Urun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun', function (Blueprint $table) {
            $table->increments('id');
            $table->string('urun_barkod');
            $table->string('urun_adi');
            $table->string('urun_agirligi');
            $table->integer('urun_adet');
            $table->integer('marka_id');
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
        Schema::dropIfExists('urun');
    }
}
