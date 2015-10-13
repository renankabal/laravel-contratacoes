<?php

class ContratacaoClasse extends Eloquent {

	/**
	 * Tabela usada pela model no banco
	 *
	 * @var string
	 */
	protected $table = 'contratacoes_classes';

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

	/*
	 *
	 * relacionamento do Eloquent ORM
	 * 
	*/
	public function contratacao()
	{
		return $this->hasOne('Contratacoes');
	}

}