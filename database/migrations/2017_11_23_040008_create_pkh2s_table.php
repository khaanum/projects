<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkh2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkh2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kab');
            $table->string('fungsi');
            $table->integer('ta');
            $table->float('luar');
            $table->float('fungsis');
            $table->float('jumlah');
            $table->float('luas');
            $table->string('tgelang');
            $table->date('tanggal_ba');
            $table->string('nomor');
            $table->date('tanggal');
            $table->integer('pengukuhan');
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
        Schema::dropIfExists('pkh2s');
    }
}
