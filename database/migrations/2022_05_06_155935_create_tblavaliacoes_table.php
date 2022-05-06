<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblavaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblavaliacoes', function (Blueprint $table) {
            $table->bigIncrements('avaliacao_id');              // avaliacao_id
            $table->text('avaliacao_comentario');               // avaliacao_comentario
            $table->integer('avaliacao_notaSentimento');        // avaliacao_notaSentimento
            $table->integer('avaliacao_notaDesempenho');        // avaliacao_notaDesempenho
            $table->unsignedBigInteger('fk_colaboradorUuid');              // fk_colaboradorUuid
            $table->unsignedBigInteger('fk_feedbackId');                   // fk_feedbackId
            $table->unsignedBigInteger('fk_usuarioId');                    // fk_usuarioId
            $table->timestamps();

            $table->foreign('fk_colaboradorUuid')->references('id')->on('table')->onDelete('CASCADE');
            $table->foreign('fk_feedbackId')->references('id')->on('table')->onDelete('CASCADE');
            $table->foreign('fk_usuarioId')->references('id')->on('table')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblavaliacoes');
    }
}

