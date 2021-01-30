<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('status_ordem_compra_id');
            $table->unsignedBigInteger('fornecedor_id');
            $table->unsignedBigInteger('cotacao_id')->nullable();
            $table->date('data_emissao');
            $table->date('data_atendimento')->nullable();
            $table->date('data_aprovacao')->nullable();
            $table->decimal('valor_total', 10,2)->default(0);
            $table->string('avulsa', 1)->default('N');
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
        Schema::dropIfExists('ordem_compras');
    }
}
