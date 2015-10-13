<?php

class PessoaTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        #Apaga e povoa a tabela de pessoas
        DB::table('pessoas')->delete();
        Pessoa::create(array('nome' => 'HARRY POTTER', 'cpf' => '829.381.029-38'));
        Pessoa::create(array('nome' => 'JOAO JENUINO DA SILVA', 'cpf' => '429.011.029-12'));
		Pessoa::create(array('nome' => 'ETEUVINA SERRAO DE PADUA', 'cpf' => '179.011.109-23'));
	
	}

}