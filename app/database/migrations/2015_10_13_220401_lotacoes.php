<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lotacoes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcoes', function($table)
        {
            $table->increments('id');
            $table->string('nome', 150);            
            $table->timestamps();
        });

        Schema::create('cargos', function($table)
        {
            $table->increments('id');
            $table->string('nome', 150);            
            $table->timestamps();
        });

        Schema::create('lotacoes_situacoes', function($table)
        {
            $table->increments('id');
            $table->string('nome', 150);            
            $table->timestamps();
        });

        Schema::create('lotacoes_ambientes', function($table)
        {
            $table->increments('id');
            $table->string('nome', 150);            
            $table->timestamps();
        });

		Schema::create('lotacoes', function($table)
        {
            $table->increments('id');
            $table->integer('pessoas_id')->unsigned();
			$table->foreign('pessoas_id')->references('id')->on('pessoas');
            $table->string('contrato', 150);
            $table->date('data_inicio');
            $table->string('documento_inicio', 150);
            $table->date('data_fim');
            $table->string('documento_fim', 150);
            $table->integer('lotacao_situacao_id')->unsigned();
			$table->foreign('lotacao_situacao_id')->references('id')->on('lotacoes_situacoes');
            $table->integer('lotacao_ambiente_id')->unsigned();
			$table->foreign('lotacao_ambiente_id')->references('id')->on('lotacoes_ambientes');
            $table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->integer('unidade_id')->unsigned();
			$table->foreign('unidade_id')->references('id')->on('unidades');
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

		Schema::drop('lotacoes');
		Schema::drop('lotacoes_ambientes');
		Schema::drop('lotacoes_situacoes');
		Schema::drop('funcoes');
		Schema::drop('cargos');
	}

}
