<?php

class Pessoa extends Eloquent {

	/**
	 * Tabela usada pela model no banco
	 *
	 * @var string
	 */
	protected $table = 'pessoas';

	/*
	 *
	 * variável fillable é usada para atribuição em massa
	 * http://laravel.com/docs/4.2/eloquent#mass-assignment
	*/
	

	protected $fillable = [
		'nome',
		'cpf'
		];

	/*
	 *
	 * regras de validação
	 *
	*/
	public static $rules = [
		'nome'		=>	'required',
		'cpf'	=>	'required'
	];

	/*
	 *
	 * relacionamento do Eloquent ORM
	 * 
	*/
	public function contratacao()
	{
		return $this->hasOne('Contratacao');
	}

}