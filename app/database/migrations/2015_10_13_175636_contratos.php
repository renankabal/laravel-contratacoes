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

        Schema::create('contratacoes_classes', function($table)
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

        Schema::create('contratacoes_disciplinas', function($table)
        {
            $table->increments('id');
            $table->string('nome', 150);
            $table->timestamps();
        });

        Schema::create('contratacoes_cargos', function($table)
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
            $table->string('cadastro', 150);
            $table->date('data_admissao');
            $table->integer('ano_admissao');
            $table->integer('contratacao_cargo_id')->unsigned();
            $table->foreign('contratacao_cargo_id')->references('id')->on('contratacoes_cargos');          
            $table->integer('contratacao_tipo_id')->unsigned();
            $table->foreign('contratacao_tipo_id')->references('id')->on('contratacoes_tipos');
            $table->integer('carga_horaria');
            $table->integer('contratacao_classe_id')->unsigned();
            $table->foreign('contratacao_classe_id')->references('id')->on('contratacoes_classes'); 
            $table->integer('contratacao_disciplina_id')->unsigned();
            $table->foreign('contratacao_disciplina_id')->references('id')->on('contratacoes_disciplinas');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');            
            $table->string('ativo', 1)->default('S');
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
        Schema::drop('contratacoes_classes');
        Schema::drop('contratacoes_disciplinas');
        Schema::drop('contratacoes_cargos');
	}

}
