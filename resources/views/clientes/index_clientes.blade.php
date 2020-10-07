@extends('layout')

@if(Request::path() == '/')
@section('cabecalho')
Lista de Audiências
@endsection

@else

@section('cabecalho')
Audiências Realizadas
@endsection
@endif

@section('conteudo')

<table id="listareu" class="table table-striped table-bordered" style="width:100%">
  
  
  <a href="/cliente/novo" class=" btn btn-outline-primary mb-2">Novo Cliente</a>
  <a href="/reu/lista" class=" btn btn-outline-primary mb-2">Lista de Reu</a>
  
  <thead>
    <tr>
      <th>Nome (Autor)</th>
      <th>Reu</th>
      <th>Nº Processo</th>
      <th>Data Audiência</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clientes as $cliente) : ?>

      <tr>
        <td>{{$cliente->nome}}</td>
        <td>{{$cliente->reu->nome}}</td>
        <td>{{$cliente->numero_processo}}</td>
        <td>{{\Carbon\Carbon::parse($cliente->data_audiencia)->format('d/m/Y')}}</td>

        <td><a href="/cliente/alterar/{{$cliente->id}}" class="btn btn-primary">Alterar</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>  

</table>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
<a href="{{ route('sair') }}" class=" text-danger mb-2">Sair do sistema</a>
@if(Request::path() == '/')
  <a href="{{ route('audiencia_realizada') }}" class=" text-primary mb-22">Audiências realizadas</a>
@else
  <a href="{{ route('index') }}" class=" text-primary mb-22">Lista de Audiências</a>
@endif
</nav>


@endsection