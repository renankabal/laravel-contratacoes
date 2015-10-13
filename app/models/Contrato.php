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
		'pessoas_id',
		'contrato',
		'data_admissao',
		'contratacao_tipo_id',
		'salario_base',
		'hora_aula_contratada',
		'valor_hora_aula',
		'ativo',
		'cadastro',
		'carga_horaria',
		'contratacao_classe',
		'usuario_id'
		];

	/*
	 *
	 * regras de validação
	 *
	*/
	public static $rules = [
		'pessoas_id' => 'required',
		'contrato' => 'required',
		'data_admissao' => 'required',
		'contratacao_tipo_id' => 'required',
		'salario_base' => 'required',
		'hora_aula_contratada' => 'required',
		'valor_hora_aula' => 'required',
		'cadastro' => 'required',
		'carga_horaria' => 'required',
		'contratacao_classe' => 'required',
		'usuario_id' => 'required'
	];

}