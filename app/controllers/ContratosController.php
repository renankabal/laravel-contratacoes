<?php

class ContratosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contratos = Contrato::orderBy('data_admissao')
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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		return View::make('contratos.create', compact('pessoas', 'tiposContratos', 'tiposClasses', 'tiposCargos', 'tiposDisciplinas'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeContrato()
	{
		// 
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
