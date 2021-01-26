<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCotacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_cotacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cotacao_id');
            $table->unsignedBigInteger('solicitacao_id')->nullable();
            $table->unsignedBigInteger('status_item_cotacao_id')->nullable();
            $table->unsignedBigInteger('fornecedor_id')->nullable();
            $table->unsignedBigInteger('ordem_compra_id')->nullable();
            $table->unsignedBigInteger('produto_id')->nullable();
            $table->integer('qtde');
            $table->date('data_entrega');
            $table->date('limite_entrega');
            $table->decimal('valor_cotacao', 10,2);
            $table->decimal('subtotal', 10,2);
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
        Schema::dropIfExists('item_cotacaos');
    }
}
