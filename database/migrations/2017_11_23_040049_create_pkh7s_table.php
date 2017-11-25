<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkh7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkh7s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perusahaan');
            $table->string('lokasi');
            $table->integer('tahun');
            $table->float('panjang');
            $table->float('luas');
            $table->string('fungsi');
            $table->string('sk');
            $table->string('ket');
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
        Schema::dropIfExists('pkh7s');
    }
}
