<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasManyThroughBottomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_many_through_bottoms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bottom');
            $table->unsignedInteger('has_many_through_middle_id');
            $table->foreign('has_many_through_middle_id')->references('id')->on('has_many_through_middles');
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
        Schema::dropIfExists('has_many_through_bottoms');
    }
}
