<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('reu_id');
            $table->string('nome');
            $table->string('email', 128);
            $table->longText('numero_processo');
            $table->string('telefone');
            $table->longText('observacao');
            $table->date('data_audiencia');
            $table->foreignId('reu_id')->constrained('reus');            
            /*
            $table->foreign('reu_id')
                ->references('id')
                ->on('reus');
            */
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
