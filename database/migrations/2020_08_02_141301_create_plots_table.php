<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('plot_number');
            $table->integer('plot_size');
            $table->text('block_number');

            $table->text('description');
            $table->text('country');
            $table->text('region');
            $table->text('district');
            $table->text('street');

            $table->text('tanroad_distance');
            $table->text('tt_drawing');
            $table->integer('survey_number');
            $table->text('north_width');
            $table->text('west_width');
            $table->text('south_width');
            $table->text('east_width');
            
            $table->text('attachment');
            $table->text('positions');
            $table->text('map');
            $table->text('status');
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
        Schema::dropIfExists('plots');
    }
}
