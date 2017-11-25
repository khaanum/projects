<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkh8sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkh8s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kawasan');
            $table->string('kab');
            $table->integer('tatabatas');
            $table->integer('identifikasi');
            $table->float('luas');
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
        Schema::dropIfExists('pkh8s');
    }
}
