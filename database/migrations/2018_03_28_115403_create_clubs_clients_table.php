<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs_clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fkclbid',10)->index();
            $table->foreign('fkclbid')->references('club_id')->on('clubs')->onDelete('cascade');

            $table->string('fkclntid', 8)->index();
            $table->foreign('fkclntid')->references('ps_code')->on('client')->onDelete('cascade');

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
        Schema::drop('clubs_clients');
    }
}
