<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->string('club_id', 10)-> primary();
            $table->string('city');
            $table->string('street');
            $table->string('building_number');
            $table->boolean('pool_existing');
            $table->integer('club_square');
            $table->integer('quantity_sportmachines');
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
