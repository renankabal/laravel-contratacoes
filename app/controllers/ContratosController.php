<?php

class ContratosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contratos = Contrato::select('pessoas.nome', 'pessoas.cpf', 'ativo', 'contratos.id')
							->leftJoin('pessoas', 'pessoas.id', '=', 'contratos.pessoa_id')
							->orderBy('data_admissao')
							->paginate(10);
		return View::make('contratos.index', compact('contratos'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pessoas = Pessoa::all();
		$tiposContratos = ContratacaoTipo::all();
		$tiposClasses = ContratacaoClasse::all();
		$tiposCargos = ContratacaoCargo::all();
		$tiposDisciplinas = ContratacaoDisciplina::all();
		return View::make('contratos.create', compact('pessoas', 'tiposContratos', 'tiposClasses', 'tiposCargos', 'tiposDisciplinas'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$contrato = new Contrato($input);

		$contrato->usuario_id = Auth::user()->id;
		$contrato->save();

	    return Redirect::action('ContratosController@index')->with('mensagem', 'Contrato cadastrado com sucesso.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// 
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createContrato($id)
	{
		$pessoas = Pessoa::find($id);
		$tiposContratos = ContratacaoTipo::all();
		$tiposClasses = ContratacaoClasse::all();
		$tiposCargos = ContratacaoCargo::all();
		$tiposDisciplinas = ContratacaoDisciplina::all();
		return View::make('contratos.createContrato', compact('pessoas', 'tiposContratos', 'tiposClasses', 'tiposCargos', 'tiposDisciplinas'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeContrato()
	{
		$id = Input::get('pessoa_id');

		$input = Input::all();

		$validator = Validator::make($input, Contrato::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::action('ContratosController@createContrato', $id)->withErrors($validator)->withInput();
		// }

		$contrato = new Contrato(array_filter($input));
		$contrato->usuario_id = Auth::user()->id;
		$contrato->save();

	    return Redirect::action('ContratosController@index')->with('mensagem', 'Contrado cadastrado com sucesso.');
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
