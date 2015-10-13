@extends('template.layout')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{action('HomeController@home')}}">Principal</a></li>
  <li><a href="{{action('PessoasController@index')}}">pessoas</a></li>
  <li class="active">Editar</li>
</ol>

<div class="page-header">
  <h2><i class="glyphicon glyphicon-user"></i> pessoa<small> Editar</small></h2>
</div>

<form method="post" action="{{ action('PessoasController@update', $pessoa->id) }}">
    <input type="hidden" name="_method" value="PUT">

    <div class="row">

        <div class="col-md-12">

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" autofocus name="nome" value="{{ Request::old('nome', $pessoa->nome) }}" onkeyup="up(this)">
                {{ $errors->first('nome', '<span class="help-block">:message</span>') }}
            </div>

            <div class="form-group {{ $errors->has('cpf') ? 'has-error' : '' }}">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" autofocus name="cpf" value="{{ Request::old('cpf', $pessoa->cpf) }}" onkeyup="up(this)">
                {{ $errors->first('cpf', '<span class="help-block">:message</span>') }}
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