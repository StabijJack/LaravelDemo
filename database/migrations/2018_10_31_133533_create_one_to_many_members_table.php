<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOneToManyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_to_many_members', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('one_to_many_owner_id');
            $table->string('car');
            $table->timestamps();
            $table->foreign('one_to_many_owner_id')->references('id')->on('one_to_many_owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('one_to_many_members');
    }
}
