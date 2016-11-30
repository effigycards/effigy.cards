<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCardIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('card_id')->unsigned()->index()->nullable();
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            /**
             * <table_name>_<column_name>_foreign
             * @see http://stackoverflow.com/questions/27175808/dropping-column-with-foreign-key-laravel-error-general-error-1025-error-on-ren#answer-27175977
             */
            $table->dropForeign('users_card_id_foreign');
            $table->dropColumn('card_id');
        });
    }
}
