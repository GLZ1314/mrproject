<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Quantity');
            $table->decimal('OrderItemPrice');
            $table->unsignedInteger('SouvenirID');
            $table->foreign('SouvenirID')->references('id')->on('souvenirs');
            $table->unsignedInteger('OrderID');
            $table->foreign('OrderID')->references('id')->on('orders');
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
        Schema::dropIfExists('order_items');
    }
}
