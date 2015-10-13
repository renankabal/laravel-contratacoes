<?php

class EntidadeUnidadeTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        #Apaga e povoa a tabela de entidades
        DB::table('entidades')->delete();
        Entidade::create(array('nome' => 'SECRETARIA DE EDUCAÇÃO DE ARACAJU'));

        #Apaga e povoa a tabela de unidades
        DB::table('unidades')->delete();
        Unidade::create(array('nome' => 'EMEI PROFª ETELVINA AMALIA DE SIQUEIRA', 'entidade_id' => 1));
        Unidade::create(array('nome' => 'ESC MUL DE EDUC INFANTIL PIERRE AVERAN', 'entidade_id' => 1));
        Unidade::create(array('nome' => 'ESC MUL DE EDUC INF BENJAMIN ALVES DE CARVALHO', 'entidade_id' => 1));
        Unidade::create(array('nome' => 'ESC MUL DE EDUCACAO INFANTIL DOM HELDER CAMARA', 'entidade_id' => 1));
	}

}