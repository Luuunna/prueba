<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('Payment_Type');
            $table->float('Payment_Ammount'); 
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
        Schema::dropIfExists('suscriptions');
    }
}
