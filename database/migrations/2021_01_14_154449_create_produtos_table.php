<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('categoria_id');
            $table->integer('unidade_id');
            $table->string("produto", 255);
            $table->string("eh_produto", 1)->nullable();
            $table->string("eh_insumo", 1)->nullable();
            $table->string("eh_promocao", 1)->nullable()->default('N');
            $table->string("eh_maisvendido", 1)->nullable()->default('N');
            $table->string("eh_lancamento", 1)->nullable()->default('N');
            $table->string("codigo_barra", 1)->nullable();
            $table->decimal("preco", 10,2)->default(0);
            $table->text("descricao");
            $table->string("imagem", 255)->nullable();
            $table->string("ativo", 1)->default("S");
            $table->integer("estoque_inicial")->default(0);
            $table->integer("estoque_minimo")->default(0);
            $table->integer("estoque_maximo")->default(0);
            $table->integer("estoque_atual")->default(0);
            $table->integer("estoque_reservado")->default(0);
            $table->integer("estoque_real")->default(0);
            $table->decimal('custo_atual', 10,2)->default(0.00);
            $table->decimal('custo_medio', 10,2)->default(0.00);
            $table->decimal('custo_producao', 10,2)->default(0.00);
            $table->decimal('custo_financeiro', 10,2)->default(0.00);
            $table->string('gtin', 20)->nullable();
            $table->string('ncm', 20)->nullable();
            $table->string('cbenef', 20)->nullable();
            $table->string('extipi', 10)->nullable();
            $table->integer('cfop')->nullable();
            $table->decimal('mva', 10,2)->default(0.00);
            $table->integer('nfci')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('unidade_id')->references('id')->on('unidades');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
