<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('plot_id');
             $table->unsignedBigInteger('user_id');
            $table->dateTime('next_date')->nullable();
            $table->text('next_amount')->nullable();
            $table->text('payment_status')->nullable();
            $table->text('receipt')->nullable();
            $table->text('account')->nullable();
            $table->timestamps();

            $table->foreign('payment_id')
            ->references('id')
            ->on('payments')
            ->onDelete('cascade');

             $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('plot_id')
            ->references('id')
            ->on('plots')
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
        Schema::dropIfExists('installments');
    }
}
