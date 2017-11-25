<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkh6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkh6s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokasi');
            $table->float('luas');
            $table->float('ca')->nullable();
            $table->float('hl')->nullable();
            $table->float('hpt');
            $table->float('hpb');
            $table->float('hpk');
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
        Schema::dropIfExists('pkh6s');
    }
}
