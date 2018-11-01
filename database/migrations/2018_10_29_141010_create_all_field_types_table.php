<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllFieldTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_field_types', function (Blueprint $table) {
            $table->increments('id');

            // $table->bigIncrements('bigIncrements');// 1 increment mogelijk
            $table->bigInteger('bigInteger')->nullable();
            $table->binary('binary')->nullable();
            $table->boolean('boolean')->nullable();
            $table->char('char', 100)->nullable();
            $table->date('date')->nullable();
            $table->dateTimeTz('dateTimeTz')->nullable();
            $table->decimal('decimal', 8, 2)->nullable();
            $table->double('double', 8, 2)->nullable();
            $table->enum('enum', ['easy', 'hard'])->nullable();
            $table->float('float', 8, 2)->nullable();
            $table->geometry('geometry')->nullable();
            $table->geometryCollection('geometryCollection')->nullable();
            // $table->increments('increments');// 1 increment mogelijk
            $table->integer('integer')->nullable();
            $table->ipAddress('ipAddress')->nullable();
            $table->json('json')->nullable();
            $table->jsonb('jsonb')->nullable();
            $table->lineString('lineString')->nullable();
            $table->longText('longText')->nullable();
            $table->macAddress('macAddress')->nullable();
            // $table->mediumIncrements('mediumIncrements');// 1 increment mogelijk
            $table->mediumText('mediumText')->nullable();
            // $table->morphs('morphs'); //behoord bij de relatiesoort Polymorphic maar niet nullable dus niet opgenomen
            $table->multiLineString('multiLineString')->nullable();
            $table->multiPoint('multiPoint')->nullable();
            $table->multiPolygon('multiPolygon')->nullable();
            $table->nullableMorphs('nullableMorphs');
            $table->point('point')->nullable();
            $table->polygon('polygon')->nullable();
            $table->rememberToken();
            // $table->smallIncrements('smallIncrements');// 1 increment mogelijk
            $table->smallInteger('smallInteger')->nullable();
            $table->softDeletes();
            // $table->softDeletesTz();//1 softdelete structuur mogelijk
            $table->string('string', 100)->nullable();
            $table->text('text')->nullable();
            $table->time('time')->nullable();
            $table->timeTz('timeTz')->nullable();
            $table->timestamp('timestamp')->nullable();
            $table->timestampTz('timestampTz')->nullable();
            $table->timestamps();
            // $table->timestampsTz();//1 timestamps systeem mogelijk
            // $table->tinyIncrements('tinyIncrements');// 1 increment mogelijk
            $table->tinyInteger('tinyInteger')->nullable();
            $table->unsignedBigInteger('unsignedBigInteger')->nullable();
            $table->unsignedDecimal('unsignedDecimal', 8, 2)->nullable();
            $table->unsignedInteger('unsignedInteger')->nullable();
            $table->unsignedMediumInteger('unsignedMediumInteger')->nullable();
            $table->unsignedSmallInteger('unsignedSmallInteger')->nullable();
            $table->unsignedTinyInteger('unsignedTinyInteger')->nullable();
            $table->uuid('uuid')->nullable();
            $table->year('year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_field_types');
    }
}
