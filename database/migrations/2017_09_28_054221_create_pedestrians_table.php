<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedestriansTable extends Migration
{
    /**
    *   The primary key of the table, do not autoincrement
    *
    *   @var integer
    **/
    protected $primaryKey = 'sensor_id';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedestrians', function (Blueprint $table) {
            $table->integer('sensor_id');
            $table->integer('Hourly_Counts');
            $table->string('month');
            $table->DateTime('daet_time');
            $table->integer('year');
            $table->integer('mdate');
            $table->integer('id');
            $table->time('time');
            $table->string('day');
            $table->string('sensor_name');

            $table->primary('sensor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedestrians');
    }
}
