<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->string('passport_code', 8)-> primary();
            $table->string('surnm_admin');
            $table->string('name');
            $table->string('lastnm_admin');
            $table->text('srudying');
            $table->DATE('birth_date');
            $table->decimal('salary');
            $table->string('fkclbid',10)->index();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->foreign('fkclbid')->references('club_id')->on('clubs')->onDelete('cascade');
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
        Schema::drop('admins');
    }
}
