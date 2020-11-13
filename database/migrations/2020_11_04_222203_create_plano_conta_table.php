<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanoContaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_conta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_conta')->nullable(false);
            $table->date('data_pagamento')->nullable(false);
            $table->float('custo_valor')->unsigned();
            $table->float('receita_valor')->unsigned();
            $table->float('saldo')->unsigned();


            $table->foreign('custo_valor')
            ->references('valor')->on('custo')
            ->onDelete('cascade');

            $table->foreign('receita_valor')
            ->references('valor')->on('receita')
            ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plano_conta');
    }
}
