<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkh4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkh4s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kegiatan');
            $table->string('no_reg');
            $table->string('kw_hutan');
            $table->string('fungsi');
            $table->float('luas');
            $table->string('lokasi');
            $table->float('panjang');
            $table->date('b_acara');
            $table->string('keterangan');
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
        Schema::dropIfExists('pkh4s');
    }
}
