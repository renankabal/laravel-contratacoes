@extends('template.layout')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{{action('HomeController@home')}}">Principal</a></li>
				<li class="active">Contratos</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form method="get" action="#">
				<div class="input-group">
				  <input type="text" id="busca" name="busca" class="form-control" placeholder="Busca" required>
				  <span class="input-group-btn">
				    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Buscar</button>
				  </span>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<a id="botao-novo" href="{{ action('ContratosController@create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> Novo</a>
			<h2><i class="fa fa-commenting-o"></i> Contratos</h2>
		</div>
	</div>

	<hr>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<th width="40%">Nome</th>
					<th width="15%">Cpf</th>
					<th width="15%">Status</th>
					<th width="17%">Ações</th>
				</thead>
				<tbody>
				@forelse ($contratos as $contrato)
					<tr>
						<td>{{ $contrato->nome }}</td>
						<td>{{ $contrato->cpf }}</td>
						<td>
							@if ($contrato->ativo == 'S')
								<span class="label label-primary">Ativo</span>
							@else
								<span class="label label-warning">Inativo</span>
							@endif
						</td>
						<td>
							<div class="btn-group btn-group-sm" role="group">
								<a href="{{ action('ContratosController@edit', $contrato->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
								<a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Criar contratacao"><i class="fa fa-calendar-check-o"></i></a>
								<span data-toggle="modal" data-target="#{{ $contrato->id }}">
								    <a class="btn btn-danger btn-sm excluir-item" data-toggle="tooltip" data-placement="top" title="Cancelar"><i class="glyphicon glyphicon-remove"></i></a>
								</span>
							</div>
						</td>
					</tr>

					{{-- Modal de confirmação de exclusão --}}

					<div class="modal fade" id="{{$contrato->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gridSystemModalLabel">Alerta</h4>
								</div>
								<div class="modal-body">
									<h5>Você tem certeza que deseja excluir este contrato?</h5>
								</div>
								<div class="modal-footer">
									<form class="pull-right" method="post" action="{{ action('ContratosController@destroy', $contrato->id) }}">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
										<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
										<button type="submit" class="btn btn-danger">Sim</button>
									</form>
								</div>
							</div>
						</div>
					</div>

				@empty
					<tr>
						<td colspan="4">
						    <div class="alert alert-warning" role="alert">
						        Nenhuma contrato foi cadastrado.
						    </div>
						</td>
					</tr>
				@endforelse
				</tbody>
			</table>
		</div>

		<div class="text-center">
			{{ $contratos->links() }}
		</div>

@stop