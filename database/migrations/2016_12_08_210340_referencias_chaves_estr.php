<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReferenciasChavesEstr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //
        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
        
        Schema::table('item_pedidos', function (Blueprint $table) {
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
        
        Schema::table('pedidos', function (Blueprint $table) {
             $table->foreign('user_id')->references('id')->on('users');
        });
        
        Schema::table('statuses', function (Blueprint $table) {
             $table->foreign('pedido_id')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
