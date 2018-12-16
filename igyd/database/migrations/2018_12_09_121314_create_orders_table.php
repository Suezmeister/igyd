<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('size');
            $table->boolean('received')->default(false);
            $table->double('credits_before_transaction',8,2);
            $table->double('credits_after_transaction',8,2);
            $table->integer('drink_id')->unsigned();
            $table->integer('payer_id')->unsigned();
            $table->integer('receiver_id')->unsigned();
            $table->timestamps();

            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('payer_id')->references('id')->on('users');
            $table->foreign('receiver_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
