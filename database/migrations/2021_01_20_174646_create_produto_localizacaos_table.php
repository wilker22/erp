<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoLocalizacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_localizacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produto_id')->unsigned();
            $table->unsignedBigInteger('localizacao_id')->unsigned();
            $table->integer('estoque')->default(0);
            $table->timestamps();

            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('localizacao_id')->references('id')->on('localizacaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_localizacaos');
    }
}
