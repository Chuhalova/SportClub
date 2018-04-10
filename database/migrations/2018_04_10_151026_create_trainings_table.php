<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->string('training_id',6)-> primary();
            $table->integer('minutes_quantity');
            $table->timestamp('start_date_time');
            $table->decimal('price');

            $table->string('fkcochid',8)->index();
            $table->foreign('fkcochid')->references('ps_code')->on('users')->onDelete('cascade');

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
        Schema::drop('trainings');
    }
}
