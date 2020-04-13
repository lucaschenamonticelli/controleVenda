<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableProdutoVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_venda', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->float('valor');
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('venda_id');
            $table->foreign('produto_id')->references('id')->on('produto');
            $table->foreign('venda_id')->references('id')->on('venda');
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
        Schema::dropIfExists('produto_venda');
    }
}
