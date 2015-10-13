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
		'nome'
		];

	/*
	 *
	 * regras de validação
	 *
	*/
	public static $rules = [
		'nome'		=>	'required'
	];

}