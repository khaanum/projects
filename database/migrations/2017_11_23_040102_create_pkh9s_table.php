<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkh9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkh9s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perusahaan');
            $table->string('penggunaan');
            $table->string('surat');
            $table->string('no_tgl');
            $table->string('jk_waktu');
            $table->float('kompensasi');
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
        Schema::dropIfExists('pkh9s');
    }
}
