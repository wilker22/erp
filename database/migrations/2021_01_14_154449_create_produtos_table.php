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
            $table->increments('id');
            $table->string("produto", 255);
            $table->string("eh_produto", 1)->nullable();
            $table->string("eh_insumo", 1)->nullable();
            $table->decimal("preco", 10,2)->default(0);
            $table->string("imagem", 255)->nullable();
            $table->string("ativo", 1)->default("S");
            $table->integer("categoria_id")->unsigned();
            $table->integer("unidade_id")->unsigned();
            $table->timestamps();

            $table->foreign("categoria_id")->references("id")->on("categorias");
            $table->foreign("unidade_id")->references("id")->on("unidades");

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
