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
            $table->bigInteger('fornecedor_id')->unsigned();
            $table->bigInteger('receita_id')->unsigned();

            $table->foreign('fornecedor_id')
            ->references('id')->on('fornecedor')
            ->onDelete('cascade');

            $table->foreign('receita_id')
            ->references('id')->on('receita')
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
