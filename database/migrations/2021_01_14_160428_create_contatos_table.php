<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("eh_cliente", 1);
            $table->string("eh_fornecedor", 1);
            $table->string("eh_transportador", 1);
            $table->string("nome", 255);
            $table->string("nome_fantasia", 255);
            $table->string("cpf", 14);
            $table->date("data_cadastro");
            $table->string("ativo", 1);
            $table->string("ddd", 4);
            $table->string("fone", 10);
            $table->string("celular", 10);
            $table->string("email", 255);
            $table->string("senha", 15);
            $table->string("cep", 10);
            $table->string("logradouro", 255);
            $table->string("numero", 15);
            $table->string("uf", 2);
            $table->string("cidade", 255);
            $table->string("complemento", 255);
            $table->string("bairro", 255);
            $table->string("rg", 50);
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
        Schema::dropIfExists('contatos');
    }
}
