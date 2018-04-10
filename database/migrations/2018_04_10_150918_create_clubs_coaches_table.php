<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs_coaches', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fkclbid',10)->index();
            $table->foreign('fkclbid')->references('club_id')->on('clubs')->onDelete('cascade');

            $table->string('fkcochid',8)->index();
            $table->foreign('fkcochid')->references('ps_code')->on('users')->onDelete('cascade');

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
        Schema::drop('clubs');
    }
}
