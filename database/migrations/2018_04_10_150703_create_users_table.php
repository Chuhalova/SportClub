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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ps_code', 8)-> index();
            $table->string('surnm_coach');
            $table->string('lastnm_coach');
            $table->DATE('birth_date');
            $table->string('sport_category')->nullable();
            $table->string('gender_coach');
            $table->string('fkclbid',10)->index();
            $table->foreign('fkclbid')->references('club_id')->on('clubs')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
