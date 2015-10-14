@extends('template.layout')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{action('HomeController@home')}}">Principal</a></li>
  <li><a href="{{action('ContratosController@index')}}">Contratos</a></li>
  <li class="active">Editar</li>
</ol>

<div class="page-header">
  <h2><i class="glyphicon glyphicon-user"></i> Contratos<small> Editar</small></h2>
</div>
<form method="post" action="{{ action('ContratosController@update', $contrato->id) }}">
    <input type="hidden" name="_method" value="PUT">

    <div class="row">

        <div class="col-md-12">

            <div class="form-group {{ $errors->has('cliente_id') ? 'has-error' : '' }}">
                <label>Pessoa</label>
                <input type="text" class="form-control" name="pessoa_id" value="{{ $contrato->pessoa->nome }}" disabled="disabled">
                <input type="hidden" name="cliente_id" value="{{ $contrato->pessoa->id }}">
                {{ $errors->first('pessoa_id', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('cadastro') ? 'has-error' : '' }}">
                <label>Cadastro</label>
                <input type="text" class="form-control" id="cadastro" name="cadastro" value="{{ $errors->has('cadastro') ? Request::old('cadastro') : $contrato->cadastro }}">
                {{ $errors->first('nome', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('data_admissao') ? 'has-error' : '' }}">
                <label>Data de Admissão</label>
                <input type="text" class="form-control" id="data_admissao" name="data_admissao" value="{{ $errors->has('data_admissao') ? Request::old('data_admissao') : $contrato->data_admissao }}">
                {{ $errors->first('data_admissao', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('ano_admissao') ? 'has-error' : '' }}">
                <label>Ano de Admissão</label>
                <input type="text" class="form-control" id="ano_admissao" name="ano_admissao" value="{{ $errors->has('ano_admissao') ? Request::old('ano_admissao') : $contrato->ano_admissao }}">
                {{ $errors->first('ano_admissao', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('contratacao_cargo_id') ? 'has-error' : '' }}">
                <label>Cargo</label>
                <select class="select2 form-control" name="contratacao_cargo_id" value="{{ Request::old('contratacao_cargo_id') }}">
                    <option value="">Selecione</option>
                    @foreach ($tiposCargos as $nome => $id)
                    <option value="{{ $id }}" {{ $contrato->contratacaoCargo->id == $nome ? 'selected' : '' }}>{{ $nome }}</option>
                    @endforeach
                </select>
                {{ $errors->first('contratacao_cargo_id', '<span class="help-block">:message</span>') }}
            </div>
        
            <div class="form-group btn-cadastro">                
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-floppy-save"></i> Salvar</button>
                <a class="btn btn-link" onclick="history.back()">Voltar</a>
            </div>

        </div>

    </div><!--row-->
    
</form>

@stop