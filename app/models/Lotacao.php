<?php

class Lotacao extends Eloquent {

	/**
	 * Tabela usada pela model no banco
	 *
	 * @var string
	 */
	protected $table = 'lotacoes';

	/*
	 *
	 * variável fillable é usada para atribuição em massa
	 * http://laravel.com/docs/4.2/eloquent#mass-assignment
	*/
	

	protected $fillable = [
		'contrato_id',
		'lotacao_carga_horaria',
		'data_inicio',
		'documento_inicio',
		'data_fim',
		'documento_fim',
		'lotacao_situacao_id',
		'lotacao_ambiente_id',
		'unidade_id',
		'usuario_id'
	];

	/*
	 *
	 * regras de validação
	 *
	*/
	public static $rules = [
		'contrato_id' => 'required',
		'lotacao_carga_horaria' => 'required',
		'data_inicio' => 'required',
		'documento_inicio' => 'required',
		'data_fim' => 'required',
		'documento_fim' => 'required',
		'lotacao_situacao_id' => 'required',
		'lotacao_ambiente_id' => 'required',
		'unidade_id' => 'required',
		'usuario_id' => 'required'
	];

}