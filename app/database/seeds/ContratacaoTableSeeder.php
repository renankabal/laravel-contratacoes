<?php

class ContratacaoTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        #Apaga e povoa a tabela de contratacoes_tipos
        DB::table('contratacoes_tipos')->delete();
        ContratacaoTipo::create(array('nome' => 'QUADRO'));
        ContratacaoTipo::create(array('nome' => 'MUNICIPAL'));
        ContratacaoTipo::create(array('nome' => 'ESTADUAL'));
        ContratacaoTipo::create(array('nome' => 'CONTRATO'));
	}

}