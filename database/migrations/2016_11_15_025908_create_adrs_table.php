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
            $table->string('post_office_box')->nullable();
            $table->string('extended_address')->nullable();
            $table->string('street_address')->nullable();
            $table->string('locality')->nullable();
            $table->string('region')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('label')->nullable();
            # $table->string('geo');
            $table->timestamps();
        });

        Schema::table('cards', function (Blueprint $table) {
            $table->integer('adr_id')->unsigned()->index()->nullable();
            $table->foreign('adr_id')->references('id')->on('adrs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            /**
             * <table_name>_<column_name>_foreign
             * @see http://stackoverflow.com/questions/27175808/dropping-column-with-foreign-key-laravel-error-general-error-1025-error-on-ren#answer-27175977
             */
            $table->dropForeign('cards_adr_id_foreign');
            $table->dropColumn('adr_id');
        });

        Schema::dropIfExists('adrs');
    }
}
