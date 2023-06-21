<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->date('date');
            $table->dateTime('hour');
            $table->integer('id_tourits_destinations')->unsigned();
            $table->foreign('id_tourits_destinations')->references('id')->
            on('tourits_destinations')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_foods')->unsigned();
            $table->foreign('id_foods')->references('id')->
            on('foods')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->
            on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('section_comments');
    }
}
