<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOrdemComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_ordem_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ordem_compra_id');
            $table->unsignedBigInteger('produto_id');
            $table->integer('qtde');
            $table->decimal('valor', 10,2);
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
        Schema::dropIfExists('item_ordem_compras');
    }
}
