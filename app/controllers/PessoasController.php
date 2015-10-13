<?php

class PessoasController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pessoas = Pessoa::orderBy('nome')
							->paginate(10);
		return View::make('pessoas.index', compact('pessoas'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pessoas.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$validator = Validator::make($input, Pessoa::$rules);

		if ($validator->fails())
		{
			return Redirect::action('OportunidadesController@create')->withErrors($validator)->withInput();
		}

		$pessoa = new Pessoa(array_filter($input));
		$pessoa->save();

	    return Redirect::action('PessoasController@index')->with('mensagem', 'Pessoa cadastrada com sucesso.');
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
		$pessoa = Pessoa::find($id);
		return View::make('pessoas.edit', compact('pessoa'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pessoa = Pessoa::find($id);

		$input = Input::all();

		$validator = Validator::make($input, Pessoa::$rules);

		if ($validator->fails())
		{
			return Redirect::action('PessoasController@edit', $id)->withErrors($validator)->withInput();
		}

		$pessoa->update(array_filter($input));

	    return Redirect::action('PessoasController@index')->with('mensagem', 'Pessoa atualizada com sucesso.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

}
