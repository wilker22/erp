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
            $table->string("eh_cliente", 1)->default('N');
            $table->string("eh_fornecedor", 1)->default('N');
            $table->string("eh_transportador", 1)->default('N');
            $table->string("nome", 255);
            $table->string("nome_fantasia", 255)->nullable();
            $table->string("cpf", 14)->nullable();
            $table->string('cnpj', 20)->nullable();
            $table->date("data_cadastro");
            $table->string("ativo", 1);
            $table->string("ddd", 4)->nullable();
            $table->string("fone", 10)->nullable();
            $table->string("celular", 10)->nullable();
            $table->string("email", 255)->nullable();
            $table->string("senha", 15);
            $table->string("cep", 10)->nullable();
            $table->string("logradouro", 255)->nullable();
            $table->string("numero", 15)->nullable();
            $table->string("uf", 2)->nullable();
            $table->string("cidade", 255)->nullable();
            $table->string("complemento", 255)->nullable();
            $table->string("bairro", 255)->nullable();
            $table->string("rg", 50)->nullable();
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
