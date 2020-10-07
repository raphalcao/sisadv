@extends('layout')

@section('cabecalho')
Lista de Reus cadastrados
@endsection

@section('conteudo')

<table id="reu" class="table table-striped table-bordered" style="width:100%">
<a href="/reu/novo" class=" btn btn-outline-primary mb-2">Cadastrar um novo Reu</a>
    <thead>
        <tr>
            <th>Id</th>
            <th>Reu</th>
            <th></th>
            <th></th>            
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($reus as $reu) : ?>
      
        <tr>
          <td>{{$reu->id}}</td>
          <td>{{$reu->nome}}</td>
          <td></td>
          <td></td>
          
          <td><a href="/reu/alterar/{{$reu->id}}" class="btn btn-primary">Alterar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>   
    
</table>
<a href="/" class=" btn btn-outline-primary mb-2">Voltar</a>
@endsection