@extends('template.layout')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{action('HomeController@home')}}">Principal</a></li>
  <li><a href="{{action('ContratosController@index')}}">Contratos</a></li>
  <li class="active">Novo</li>
</ol>

<div class="page-header">
  <h2><i class="glyphicon glyphicon-user"></i> Contratos<small> Novo</small></h2>
</div>

<form method="post" action="{{ action('ContratosController@store') }}">
    <div class="row">

        <div class="col-md-12">

            <div class="form-group {{ $errors->has('pessoa_id') ? 'has-error' : '' }}">
                <label>Pessoa</label>
                <select class="select2 form-control" id="pessoa_id" name="pessoa_id" value="{{ Request::old('pessoa_id') }}">
                <option value="">Selecione</option>
                @foreach($pessoas as $pessoa)
                    <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                @endforeach
            </select>
            {{ $errors->first('pessoa_id', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('cadastro') ? 'has-error' : '' }}">
                <label>Cadastro</label>
                <input type="text" class="form-control" name="cadastro">
                {{ $errors->first('cadastro', '<span class="help-block">:message</span>') }}
            </div>
            
            <div class="form-group {{ $errors->has('data_admissao') ? 'has-error' : '' }}">
                <label>Data de Admissão</label>
                <input type="text" class="form-control" id="data" name="data_admissao">
                {{ $errors->first('data_admissao', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('ano_admissao') ? 'has-error' : '' }}">
                <label>Ano do concurso</label>
                <input type="text" class="form-control" id= "ano" name="ano_admissao">
                {{ $errors->first('ano_admissao', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('contratacao_cargo_id') ? 'has-error' : '' }}">
                <label>Cargo</label>
                <select class="form-control" id="contratacao_cargo_id" name="contratacao_cargo_id">
                    <option value="">Selecione</option>
                    @foreach ($tiposCargos as $tipoCargo)
                    <option value="{{ $tipoCargo->id }}" {{ Request::old('contratacao_cargo_id') == $tipoCargo->id ? 'selected' : '' }}>{{ $tipoCargo->nome }}</option>
                    @endforeach
                </select>
                {{ $errors->first('contratacao_tipo_id', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('contratacao_tipo_id') ? 'has-error' : '' }}">
                <label for="contratacao_tipo_id">Tipo de vinculo</label>
                <select class="form-control" id="contratacao_tipo_id" name="contratacao_tipo_id">
                    <option value="">Selecione</option>
                    @foreach ($tiposContratos as $tipoContrato)
                    <option value="{{ $tipoContrato->id }}" {{ Request::old('contratacao_tipo_id') == $tipoContrato->id ? 'selected' : '' }}>{{ $tipoContrato->nome }}</option>
                    @endforeach
                </select>
                {{ $errors->first('contratacao_tipo_id', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('carga_horaria') ? 'has-error' : '' }}">
                <label>Carga Horária</label>
                <select class="form-control" name="carga_horaria">
                    <option value="">Selecione</option>
                    <option value="20">20h</option>
                    <option value="40">40h</option>
                    <option value="80">80h</option>
                </select>
                {{ $errors->first('carga_horaria', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('contratacao_classe_id') ? 'has-error' : '' }}">
                <label>Classe</label>
                <select class="form-control" name="contratacao_classe_id">
                    <option value="">Selecione</option>
                    @foreach ($tiposClasses as $tipoClasse)
                    <option value="{{ $tipoClasse->id }}" {{ Request::old('contratacao_classe_id') == $tipoClasse->id ? 'selected' : '' }}>{{ $tipoClasse->nome }}</option>
                    @endforeach
                </select>
                {{ $errors->first('contratacao_classe_id', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('contratacao_disciplina_id') ? 'has-error' : '' }}">
                <label for="contratacao_disciplina_id">Disciplina do concurso</label>
                <select class="form-control" id="contratacao_disciplina_id" name="contratacao_disciplina_id">
                    <option value="">Selecione</option>
                    @foreach ($tiposDisciplinas as $tipoDisciplina)
                    <option value="{{ $tipoDisciplina->id }}" {{ Request::old('contratacao_disciplina_id') == $tipoDisciplina->id ? 'selected' : '' }}>{{ $tipoDisciplina->nome }}</option>
                    @endforeach
                </select>
                {{ $errors->first('contratacao_disciplina_id', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('ativo') ? 'has-error' : '' }}">
                <label>Ativo</label>
                <select class="form-control" name="ativo">
                    <option value="">Selecione</option>
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                </select>
                {{ $errors->first('ativo', '<span class="help-block">:message</span>') }}
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