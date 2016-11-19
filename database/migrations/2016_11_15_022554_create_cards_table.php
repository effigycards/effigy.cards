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
            $table->string('name')->nullable();
            $table->string('honorific_prefix')->nullable();
            $table->string('given_name')->nullable();
            $table->string('additional_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('sort_string')->nullable();
            $table->string('honorific_suffix')->nullable();
            $table->string('nickname')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('photo')->nullable();
            $table->string('url')->nullable();
            $table->string('uid')->nullable();
            $table->string('category')->nullable();
            # $table->string('geo');
            $table->string('tel')->nullable();
            $table->string('note')->nullable();
            $table->date('bday')->nullable();
            $table->string('key')->nullable();
            $table->string('org')->nullable();
            $table->string('job_title')->nullable();
            $table->string('role')->nullable();
            $table->string('impp')->nullable();
            $table->string('sex')->nullable();
            $table->string('gender_identity')->nullable();
            $table->date('anniversary')->nullable();
            // Reserved Properties
            $table->string('organization_name')->nullable();
            $table->string('organization_unit')->nullable();
            $table->string('tz')->nullable();
            $table->date('rev')->nullable();
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
