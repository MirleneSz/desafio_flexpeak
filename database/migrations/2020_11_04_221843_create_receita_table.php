<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao')->nullable(false);
            $table->float('valor')->nullable(false);
            $table->bigInteger('cliente_id')->unsigned();


            $table->foreign('cliente_id')
                ->references('id')->on('cliente')
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
        Schema::dropIfExists('receita');
    }
}
