<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form5s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', 255);
            $table->integer('quant_semestres');
            $table->string('nome_c', 255);
            $table->date('dt_inicio');
            $table->date('dt_fim');
            $table->string('status', 20)->nullable();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('customFileLang', 255);
            $table->integer('lim_carga_h');
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
        Schema::dropIfExists('form5s');
    }
}