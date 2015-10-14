<?php

class Contrato extends Eloquent {

	/**
	 * Tabela usada pela model no banco
	 *
	 * @var string
	 */
	protected $table = 'contratos';

	/*
	 *
	 * variável fillable é usada para atribuição em massa
	 * http://laravel.com/docs/4.2/eloquent#mass-assignment
	*/
	

	protected $fillable = [
		'pessoa_id',
		'cadastro',
		'data_admissao',
		'ano_admissao',
		'contratacao_cargo_id',
		'contratacao_tipo_id',
		'carga_horaria',
		'contratacao_classe_id',
		'contratacao_disciplina_id',
		'ativo',
		'usuario_id'
		];

	/*
	 *
	 * regras de validação
	 *
	*/
	public static $rules = [
		'pessoa_id' => 'required',
		'cadastro' => 'required',
		'data_admissao' => 'required',
		'ano_admissao' => 'required',
		'contratacao_cargo_id' => 'required',
		'contratacao_tipo_id' => 'required',
		'carga_horaria' => 'required',
		'contratacao_classe_id' => 'required',
		'contratacao_disciplina_id' => 'required',
		'ativo' => 'required',
		'usuario_id' => 'required'
	];

}