<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('localizacao_id');
            $table->unsignedBigInteger('tipo_movimento_id');
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('ordem_compra_id')->nullable();
            $table->unsignedBigInteger('pedido_id')->nullable();
            $table->unsignedBigInteger('entrada_id')->nullable();
            $table->unsignedBigInteger('saida_id')->nullable();
            $table->unsignedBigInteger('ordem_producao_id')->nullable();
            $table->string('ent_sai', 1);
            $table->date('data_movimento');
            $table->integer('qtde_movimento');
            $table->decimal('valor_movimento', 10,2)->default(0.00);
            $table->decimal('subtotal_movimento', 10,2)->default(0.00);
            $table->string('descricao');
            $table->string('saldoestoque');
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
        Schema::dropIfExists('movimentos');
    }
}
