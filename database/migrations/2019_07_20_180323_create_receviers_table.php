<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceviersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receviers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('accountNum')->unique();
            $table->string('name');
            $table->bigInteger('mobile');
            $table->string('companyName');
            $table->string('address');
            $table->integer('postal');
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
        Schema::dropIfExists('receviers');
    }
}
