<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item__pedidos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('pedido_id')->unsigned();
            $table->integer('produto_id')->unsigned();

            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::table('item__pedidos', function (Blueprint $table) {
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item__pedidos');
    }
}
