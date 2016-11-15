<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            // Properties
            $table->string('name');
            $table->string('honorific_prefix');
            $table->string('given_name');
            $table->string('additional_name');
            $table->string('family_name');
            $table->string('sort_string');
            $table->string('honorific_suffix');
            $table->string('nickname');
            $table->string('email');
            $table->string('logo');
            $table->string('photo');
            $table->string('url');
            $table->string('uid');
            $table->string('category');
            # $table->string('adr');
            $table->string('post_office_box');
            $table->string('extended_address');
            $table->string('street_address');
            $table->string('locality');
            $table->string('region');
            $table->string('postal_code');
            $table->string('country_name');
            $table->string('label');
            # $table->string('geo');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('altitude');
            $table->string('tel');
            $table->string('note');
            $table->date('bday');
            $table->string('key');
            $table->string('org');
            $table->string('job_title');
            $table->string('role');
            $table->string('impp');
            $table->string('sex');
            $table->string('gender_identity');
            $table->date('anniversary');
            // Reserved Properties
            $table->string('organization_name');
            $table->string('organization_unit');
            $table->string('tz');
            $table->date('rev');
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
        Schema::dropIfExists('cards');
    }
}
