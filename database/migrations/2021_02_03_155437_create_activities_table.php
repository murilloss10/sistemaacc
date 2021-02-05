<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('form1_id');
            $table->foreign('form1_id')->references('id')->on('form1s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form2_id');
            $table->foreign('form2_id')->references('id')->on('form2s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form3_id');
            $table->foreign('form3_id')->references('id')->on('form3s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form4_id');
            $table->foreign('form4_id')->references('id')->on('form4s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form5_id');
            $table->foreign('form5_id')->references('id')->on('form5s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form6_id');
            $table->foreign('form6_id')->references('id')->on('form6s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form7_id');
            $table->foreign('form7_id')->references('id')->on('form7s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form8_id');
            $table->foreign('form8_id')->references('id')->on('form8s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form9_id');
            $table->foreign('form9_id')->references('id')->on('form9s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form10_id');
            $table->foreign('form10_id')->references('id')->on('form10s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form11_id');
            $table->foreign('form11_id')->references('id')->on('form11s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form12_id');
            $table->foreign('form12_id')->references('id')->on('form12s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form13_id');
            $table->foreign('form13_id')->references('id')->on('form13s')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('form14_id');
            $table->foreign('form14_id')->references('id')->on('form14s')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('activities');
    }
}
