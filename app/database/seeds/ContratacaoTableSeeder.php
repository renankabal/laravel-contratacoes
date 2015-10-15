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

        #Apaga e povoa a tabela de contratacoes_cargos
        DB::table('contratacoes_cargos')->delete();
        ContratacaoCargo::create(array('nome' => 'PROFESSOR'));
        ContratacaoCargo::create(array('nome' => 'COORDENADOR'));
        ContratacaoCargo::create(array('nome' => 'AUXILIAR ADMINISTRATIVO'));
        ContratacaoCargo::create(array('nome' => 'AUXILIAR EDUCACIONAL'));
        ContratacaoCargo::create(array('nome' => 'PEDAGOGO'));
        ContratacaoCargo::create(array('nome' => 'ESPECIALISTA EM EDUCACAO'));

        #Apaga e povoa a tabela de contratacoes_disciplinas
        DB::table('contratacoes_disciplinas')->delete();
        ContratacaoDisciplina::create(array('nome' => 'Química'));
        ContratacaoDisciplina::create(array('nome' => 'Física'));
        ContratacaoDisciplina::create(array('nome' => 'Matemática'));
        ContratacaoDisciplina::create(array('nome' => 'Biologia'));
        ContratacaoDisciplina::create(array('nome' => 'Ciências'));
        ContratacaoDisciplina::create(array('nome' => 'Língua /Literatura Portuguesa'));
        ContratacaoDisciplina::create(array('nome' => 'Língua /Literatura estrangeira - Inglês'));
        ContratacaoDisciplina::create(array('nome' => 'Língua /Literatura estrangeira - Espanhol'));
        ContratacaoDisciplina::create(array('nome' => 'Língua /Literatura estrangeira - outra'));
        ContratacaoDisciplina::create(array('nome' => 'Arte (Educação Artística'));
        ContratacaoDisciplina::create(array('nome' => 'Educação Física'));
        ContratacaoDisciplina::create(array('nome' => 'História'));
        ContratacaoDisciplina::create(array('nome' => 'Geografia'));
        ContratacaoDisciplina::create(array('nome' => 'Filosofia'));
        ContratacaoDisciplina::create(array('nome' => 'Informática/Computação'));
        ContratacaoDisciplina::create(array('nome' => 'Professor de 1ª a 4ª série'));

        #Apaga e povoa a tabela de contratos
        DB::table('contratos')->delete();
        Contrato::create(array(
            'pessoa_id' => 1,
            'cadastro'  => '21313/2015',
            'data_admissao' => '2014-01-24',
            'ano_admissao' => 2014,
            'contratacao_cargo_id' => 1,
            'contratacao_tipo_id' => 1,
            'carga_horaria' => 40,
            'contratacao_classe_id' => 1,
            'contratacao_disciplina_id' => 1,
            'ativo' => 'S',
            'usuario_id' => 1
        ));
    }

}