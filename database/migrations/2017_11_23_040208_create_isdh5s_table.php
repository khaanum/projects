<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIsdh5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isdh5s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kls_lahan');
            $table->float('tn');
            $table->float('ca');
            $table->float('twa');
            $table->float('sal');
            $table->float('hl');
            $table->float('hpt');
            $table->float('hp');
            $table->float('hpk');
            $table->float('apl');
            $table->float('total');
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
        Schema::dropIfExists('isdh5s');
    }
}
