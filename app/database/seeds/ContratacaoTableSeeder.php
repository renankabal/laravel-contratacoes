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
        ContratacaoTipo::create(array('nome' => 'QUADRO ESTADUAL'));
        ContratacaoTipo::create(array('nome' => 'QUADRO MUNICIPAL'));
        ContratacaoTipo::create(array('nome' => 'QUADRO FEDERAL'));
        ContratacaoTipo::create(array('nome' => 'CONTRATO'));

        #Apaga e povoa a tabela de contratacoes_classes
        DB::table('contratacoes_classes')->delete();
        ContratacaoClasse::create(array('nome' => 'A'));
        ContratacaoClasse::create(array('nome' => 'B'));
        ContratacaoClasse::create(array('nome' => 'C'));
        ContratacaoClasse::create(array('nome' => 'D'));
        ContratacaoClasse::create(array('nome' => 'E'));
        ContratacaoClasse::create(array('nome' => 'F'));
	}

}