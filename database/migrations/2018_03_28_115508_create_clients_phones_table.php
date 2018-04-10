<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_phones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('phone');

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
        Schema::drop('clients_phones');
    }
}
