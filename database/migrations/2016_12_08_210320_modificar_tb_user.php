<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModificarTbUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->mediumText('endereco');
            $table->string('sexo');
            $table->string('cpf')->unique();
            $table->string('cep');
            $table->string('estado');
            $table->string('cidade');
            $table->string('numero');
            $table->string('status');
            $table->date('data_nasc');
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
