<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManyToManyPivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('many_to_many_pivots', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('many_to_many_owner_left_id');
            $table->unsignedInteger('many_to_many_owner_right_id');
            $table->string('reden');
            $table->timestamps();
            $table->foreign('many_to_many_owner_left_id')->references('id')->on('many_to_many_owner_lefts');
            $table->foreign('many_to_many_owner_right_id')->references('id')->on('many_to_many_owner_rights');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('many_to_many_pivots');
    }
}
