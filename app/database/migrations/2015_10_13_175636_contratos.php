<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contratos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratacoes_tipos', function($table)
        {
            $table->increments('id');
            $table->string('nome', 150);
            $table->timestamps();
        });

        Schema::create('remuneracoes_tipos', function($table)
        {
            $table->increments('id');
            $table->string('nome', 150);
            $table->timestamps();
        });

		Schema::create('contratos', function($table)
        {
            $table->increments('id');
            $table->integer('pessoas_id')->unsigned();
			$table->foreign('pessoas_id')->references('id')->on('pessoas');
            $table->string('contrato', 150);
            $table->date('data_admissao');
            $table->integer('contratacao_tipo_id')->unsigned();
			$table->foreign('contratacao_tipo_id')->references('id')->on('contratacoes_tipos');
            $table->float('salario_base');
            $table->integer('hora_aula_contratada');
            $table->float('valor_hora_aula');            
            $table->string('ativo', 1)->default('s');
            $table->string('cadastro', 150);
            $table->integer('carga_horaria');
            $table->string('contratacao_classe', 150);
            $table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('usuarios');            
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
		Schema::drop('contratos');
		Schema::drop('contratacoes_tipos');
		Schema::drop('remuneracoes_tipos');
	}

}
