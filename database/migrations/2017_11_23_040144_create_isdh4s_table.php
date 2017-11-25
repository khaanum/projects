<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIsdh4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isdh4s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_kls');
            $table->integer('zone');
            $table->integer('w_e');
            $table->integer('s_n');
            $table->string('tphutan');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
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
        Schema::dropIfExists('isdh4s');
    }
}
