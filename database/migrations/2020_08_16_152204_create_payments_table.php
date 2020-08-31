<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('customer')->nullable();
            $table->text('status')->nullable();
            $table->time('date')->nullable();
            $table->text('method')->nullable();
            $table->text('number_of_installments')->nullable();
            $table->text('cash')->nullable();
            $table->text('account')->nullable();
            $table->text('unpayed')->nullable();
            $table->text('agreement_attachment')->nullable();
            $table->text('receipt_attachment')->nullable();
            $table->text('receipt')->nullable();
            $table->text('size')->nullable();
            $table->text('plot')->nullable();
            $table->text('block')->nullable();
            $table->text('geo')->nullable();
            $table->text('tp')->nullable();
            $table->text('country')->nullable();
            $table->text('region')->nullable();
            $table->text('district')->nullable();
            $table->text('street')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
