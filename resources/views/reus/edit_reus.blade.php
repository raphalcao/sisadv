@extends('layout')

@section('cabecalho')
Alterar o Reu
@endsection

@section('conteudo')


<form method="POST" id="createcliente">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">     
        <input value="{{$dados->nome}}"  type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="true">
     </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
      <a href="/reu/lista" class=" btn btn-outline-primary ">Voltar</a>
    </div>
  </div>

</form>


@endsection