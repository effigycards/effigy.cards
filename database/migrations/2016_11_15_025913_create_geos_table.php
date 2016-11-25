<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('altitude')->nullable();
            $table->timestamps();
        });

        Schema::table('cards', function (Blueprint $table) {
            $table->integer('geo_id')->unsigned()->index()->nullable();
            $table->foreign('geo_id')->references('id')->on('geos')->onDelete('cascade');
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
            $table->dropForeign('cards_geo_id_foreign');
            $table->dropColumn('geo_id');
        });

        Schema::dropIfExists('geos');
    }
}
