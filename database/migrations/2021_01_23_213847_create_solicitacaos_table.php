<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('status_solicitacao_id');
            $table->unsignedBigInteger('ordem_compra_id')->nullable();
            $table->unsignedBigInteger('ordem_producao_id')->nullable();
            $table->unsignedBigInteger('fornecedor_id')->nullable();
            $table->integer('qtde');
            $table->date('data_solicitacao');
            $table->time('hora_solicitacao');
            $table->date('data_entrega')->nullable();
            $table->timestamps();

            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitacaos');
    }
}
