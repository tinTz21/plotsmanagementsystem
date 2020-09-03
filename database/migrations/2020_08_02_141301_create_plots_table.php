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
            $table->text('plot_number')->nullable();
            $table->text('text')->nullable();
            $table->text('block_number')->nullable();
            $table->text('plot_size')->nullable();
            $table->text('description')->nullable();
            $table->text('country')->nullable();
            $table->text('region')->nullable();
            $table->text('district')->nullable();
            $table->text('street')->nullable();
            $table->text('tanroad_distance')->nullable();
            $table->text('tt_drawing')->nullable();
            $table->text('survey_number')->nullable();
            $table->text('north_width')->nullable();
            $table->text('west_width')->nullable();
            $table->text('south_width')->nullable();
            $table->text('east_width')->nullable();
            $table->text('attachment')->nullable();
            $table->text('positions')->nullable();
            $table->text('map')->nullable();
            $table->text('status')->nullable();
            $table->text('diligencef')->nullable();
            $table->text('photof')->nullable();
            $table->text('historicalf')->nullable();
            $table->text('purchasesf')->nullable();
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
