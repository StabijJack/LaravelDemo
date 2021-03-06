<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolymorphicMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polymorphic_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->morphs('owner');//vervangd de volgende 2 regels
            // $table->unsignedInteger('owner_id');
            // $table->string('owner_type');
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
        Schema::dropIfExists('polymorphic_members');
    }
}
