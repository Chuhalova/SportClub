<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubcardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubcard', function (Blueprint $table) {
            $table->increments('numb_clubcard');
            $table->string('clubcard_number', 10)-> index();
            $table->decimal('price_clubcard');
            $table->date('start_date');
            $table->date('finish_date');

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
        Schema::drop('clubcard');
    }
}
