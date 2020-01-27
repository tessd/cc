<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name', 64);
            $table->string('Email', 256);
            $table->string('Street', 256);
            $table->string('City', 128);
            $table->string('Zip_code', 10);
            $table->text('comment')->nullable();
            $table->text('Order');
            $table->string('User_id', 10000);
            $table->string('Status', 10);
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
        Schema::dropIfExists('order');
    }
}