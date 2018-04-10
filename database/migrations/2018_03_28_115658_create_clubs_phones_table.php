<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');

            $table->string('fkclbid',10)->index();
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
        Schema::drop('clubs_phones');
    }
}
