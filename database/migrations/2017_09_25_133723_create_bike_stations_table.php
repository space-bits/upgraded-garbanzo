<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_stations', function (Blueprint $table) {
            $table->increments('id');
            $table->float('latitude');
            $table->float('longtitude');
            $table->string('featurename');
            $table->integer('nbbikes');
            $table->integer('nbemptydoc');
            $table->string('terminalname');
            $table->date('uploaddate');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bike_stations');
    }
}
