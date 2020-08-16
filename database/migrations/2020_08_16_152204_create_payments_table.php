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
            $table->text('customer');
            $table->text('status');
            $table->text('method');
            $table->text('number_of_installments');
            $table->text('cash');
            $table->text('account');
            $table->text('unpayed');
            $table->text('agreement_attachment');
            $table->text('receipt_attachment');
            $table->text('receipt');
            $table->text('size');
            $table->text('plot');
            $table->text('block');
            $table->text('geo');
            $table->text('tp');
            $table->text('country');
            $table->text('region');
            $table->text('district');
            $table->text('street');
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
        Schema::dropIfExists('payments');
    }
}
