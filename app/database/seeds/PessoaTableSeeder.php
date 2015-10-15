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
		Pessoa::create(array('nome' => 'MARIETA SEVERO', 'cpf' => '179.301.169-23'));
		Pessoa::create(array('nome' => 'ERNESTO CRUZONILDO', 'cpf' => '021.302.504-11'));
		Pessoa::create(array('nome' => 'GEFFERSON LOPES', 'cpf' => '403.936.029-29'));
		Pessoa::create(array('nome' => 'GILHERMINA DA SILVA', 'cpf' => '201.665.938-33'));
		Pessoa::create(array('nome' => 'AMARAL DE SOUSA', 'cpf' => '333.291.012-22'));
		Pessoa::create(array('nome' => 'MARIA DE JESUS', 'cpf' => '021.330.332-00'));
		Pessoa::create(array('nome' => 'GEORGINA AMARAL', 'cpf' => '392.391.021-22'));
		Pessoa::create(array('nome' => 'LOPES GILHERMINO', 'cpf' => '002.230.102-00'));
		Pessoa::create(array('nome' => 'FRANCISCO DE SOUZA', 'cpf' => '192.021.932-02'));
		Pessoa::create(array('nome' => 'CLARA DE MEDEIROS', 'cpf' => '382.102.023-13'));
	
	}

}