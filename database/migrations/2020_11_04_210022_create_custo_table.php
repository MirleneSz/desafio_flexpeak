<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao')->nullable(false);
            $table->float('valor')->nullable(false);
            $table->bigInteger('fornecedor_id')->unsigned();


            $table->foreign('fornecedor_id')
                ->references('id')->on('fornecedor')
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
        Schema::dropIfExists('custo');
    }
}
