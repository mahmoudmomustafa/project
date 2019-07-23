<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shipmentNum')->unique();
            $table->string('type');
            $table->integer('weight');
            $table->integer('width');
            $table->integer('quantity');
            $table->string('paymentMethod');
            $table->integer('price');
            // $table->integer('totalPrice');
            $table->date('pickupDate');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('recevier_id');
            $table->timestamps();

            $table->foreign('driver_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('recevier_id')->references('id')->on('receviers');
            $table->foreign('state_id')->references('id')->on('shipment_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
