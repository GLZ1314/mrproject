<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouvenirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souvenirs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name',50);
            $table->string('Description',500);
            $table->unsignedDecimal('Price',12,2);
            $table->string('PathOfImage');
            $table->unsignedInteger('SupplierID');
            $table->foreign('SupplierID')->references('id')->on('suppliers');
            $table->unsignedInteger('CategoryID');
            $table->foreign('CategoryID')->references('id')->on('Category');
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
        Schema::dropIfExists('souvenirs');
    }
}
