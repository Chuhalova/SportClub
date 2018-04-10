<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');

            $table->string('fkcochid',8)->index();

            $table->timestamps();
        });
        Schema::table('coaches_phones', function(Blueprint $table)
        {
          $table->foreign('fkcochid')->references('ps_code')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coaches_phones');
    }
}
