<?php

class LotacaoTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        #Apaga e povoa a tabela de Situacoes da Lotacao
        DB::table('lotacoes_situacoes')->delete();
        LotacaoSituacao::create(array('nome' => 'ATIVO'));
        LotacaoSituacao::create(array('nome' => 'LICENCA SEM VENCIMENTO'));
        LotacaoSituacao::create(array('nome' => 'LICENCA MATERNIDADE'));
        LotacaoSituacao::create(array('nome' => 'LICENCA MEDICA'));
        LotacaoSituacao::create(array('nome' => 'LICENCA PARA ESTUDOS'));
        LotacaoSituacao::create(array('nome' => 'LICENCA PREMIO ESPECIAL'));

        #Apaga e povoa a tabela de Situacoes da Lotacao
        DB::table('lotacoes_ambientes')->delete();
        LotacaoAmbiente::create(array('nome' => 'SALA DE AULA'));
        LotacaoAmbiente::create(array('nome' => 'SECRETARIA ESCOLAR'));
        LotacaoAmbiente::create(array('nome' => 'BIBLIOTECA'));
        LotacaoAmbiente::create(array('nome' => 'COORDENAÇAO PEDAGOGICA'));
        LotacaoAmbiente::create(array('nome' => 'LIED'));
        LotacaoAmbiente::create(array('nome' => 'TV ESCOLA'));

        #Apaga e povoa a tabela de lotacoes
        DB::table('lotacoes')->delete();
        Lotacao::create(array(
            'contrato_id' => 1,
            'lotacao_carga_horaria' => 20,
            'data_inicio' => '2007-10-21',
            'documento_inicio' => 'OFICIO 1/2007',
            'lotacao_situacao_id' => 1,
            'lotacao_ambiente_id' => 1,
            'unidade_id' => 1,
            'usuario_id' => 1
        ));
        Lotacao::create(array(
            'contrato_id' => 1,
            'lotacao_carga_horaria' => 20,
            'data_inicio' => '2008-10-21',
            'documento_inicio' => 'OFICIO 2/2008',
            'lotacao_situacao_id' => 1,
            'lotacao_ambiente_id' => 1,
            'unidade_id' => 2,
            'usuario_id' => 1
        ));
        Lotacao::create(array(
            'contrato_id' => 1,
            'lotacao_carga_horaria' => 20,
            'data_inicio' => '2009-10-21',
            'documento_inicio' => 'OFICIO 3/2009',
            'lotacao_situacao_id' => 1,
            'lotacao_ambiente_id' => 1,
            'unidade_id' => 3,
            'usuario_id' => 1
        ));
        Lotacao::create(array(
            'contrato_id' => 1,
            'lotacao_carga_horaria' => 20,
            'data_inicio' => '2010-10-21',
            'documento_inicio' => 'OFICIO 4/2010',
            'lotacao_situacao_id' => 1,
            'lotacao_ambiente_id' => 1,
            'unidade_id' => 4,
            'usuario_id' => 1
        ));
    }

}