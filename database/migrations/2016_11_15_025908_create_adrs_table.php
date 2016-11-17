<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_office_box');
            $table->string('extended_address');
            $table->string('street_address');
            $table->string('locality');
            $table->string('region');
            $table->string('postal_code');
            $table->string('country_name');
            $table->string('label');
            # $table->string('geo');
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
        Schema::dropIfExists('adrs');
    }
}
