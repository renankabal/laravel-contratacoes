<?php

class HomeController extends BaseController {

	public function home(){

		$pessoas = Pessoa::count();
		$contratos = Contrato::count();
		$lotacoes = Lotacao::count();

		return View::make('home.inicio', compact('pessoas', 'contratos', 'lotacoes'));
	}

}