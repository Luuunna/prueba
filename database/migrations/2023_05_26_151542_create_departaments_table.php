<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departaments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departament_name');
            $table->string('Departments_Info');
            $table->binary('Departments_Image');
            $table->integer('id_foods')->unsigned();
            $table->foreign('id_foods')->references('id')->
            on('foods')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_tourits_destinations')->unsigned();
            $table->foreign('id_tourits_destinations')->references('id')->
            on('tourits_destinations')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('departaments');
    }
}
