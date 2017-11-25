<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkh1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkh1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kw_hutan');
            $table->integer('tghk');
            $table->integer('rtrwp');
            $table->integer('paduserasi');
            $table->integer('penunjukan');
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
        Schema::dropIfExists('pkh1s');
    }
}
