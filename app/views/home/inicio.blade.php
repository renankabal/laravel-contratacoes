@extends('template.layout')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h3 class="page-head-line">Inicio</h3>
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-4">
        <div class="main-box mb-blue">
            <a href="{{action('PessoasController@index')}}">
                <i class="fa fa-bullhorn fa-5x"></i>
                <h5>{{{ $pessoas }}} Pessoa(s)</h5>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="main-box mb-verde-claro">
            <a href="{{action('ContratosController@index')}}">
                <i class="fa fa-user fa-5x"></i>
                <h5>{{{ $contratos }}} Contrato(s)</h5>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="main-box mb-dull">
            <a href="{{action('LotacoesController@index')}}">
                <i class="fa fa-users fa-5x"></i>
                <h5>{{ $lotacoes }} Lotação(ões)</h5>
            </a>
        </div>
    </div>
</div>
@stop