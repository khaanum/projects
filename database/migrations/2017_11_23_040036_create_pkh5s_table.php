<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkh5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkh5s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_keg');
            $table->string('n_reg');
            $table->string('kw_hutan');
            $table->string('fungsi');
            $table->float('luas');
            $table->string('lokasi');
            $table->float('batas');
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
        Schema::dropIfExists('pkh5s');
    }
}
