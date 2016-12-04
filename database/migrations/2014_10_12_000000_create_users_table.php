<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Laravel defaults.
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Card properties.
            $table->string('honorific_prefix')->nullable();
            $table->string('given_name')->nullable();
            $table->string('additional_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('sort_string')->nullable();
            $table->string('honorific_suffix')->nullable();
            $table->string('nickname')->nullable();
            $table->string('logo')->nullable();
            $table->string('photo')->nullable();
            $table->string('url')->nullable();
            $table->string('uid')->nullable();
            $table->string('category')->nullable();
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

            // Card reserved properties.
            $table->string('organization_name')->nullable();
            $table->string('organization_unit')->nullable();
            $table->string('tz')->nullable();
            $table->date('rev')->nullable();

            // Adr properties.
            $table->string('post_office_box')->nullable();
            $table->string('extended_address')->nullable();
            $table->string('street_address')->nullable();
            $table->string('locality')->nullable();
            $table->string('region')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('label')->nullable();

            // Geo properties.
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('altitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
