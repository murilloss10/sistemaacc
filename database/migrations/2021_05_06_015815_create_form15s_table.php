<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm15sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form15s', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 255);
            $table->string('titulo', 255);
            $table->string('onde_pub', 255);
            $table->date('dt_pub');
            $table->string('status', 20)->nullable();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('customFileLang', 255);
            $table->integer('lim_carga_h');
            $table->integer('horas_aprovadas')->nullable();
            $table->string('aprovacao');
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
        Schema::dropIfExists('form15s');
    }
}
