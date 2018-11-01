<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManyToManyPolymorphicPivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('many_to_many_polymorphic_pivots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason')->nullable();
            $table->unsignedInteger('many_to_many_polymorphic_tag_id');
            $table->unsignedInteger('many_to_many_polymorphic_pivot_id');
            $table->string('many_to_many_polymorphic_pivot_type');
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
        Schema::dropIfExists('many_to_many_polymorphic_pivots');
    }
}
