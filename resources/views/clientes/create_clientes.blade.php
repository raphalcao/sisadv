@extends('layout')

@section('cabecalho')
Novo Cliente
@endsection

@section('conteudo')


<form method="POST" id="createcliente">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputprocesso" class="col-sm-2 col-form-label">Nº do Processo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="processo" id="processo" placeholder="Nº do Processo" required="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputtelefone" class="col-sm-2 col-form-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="reu_id" class="col-sm-2 col-form-label">Réu</label>
    <div class="col-sm-10">
      <select id="reu_id" name="reu_id" class="form-control">
        <?php foreach ($reus as $reu) : ?>
          <option value="{{$reu->id}}">{{$reu->nome}}</option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputdataaudiencia" class="col-sm-2 col-form-label">Data de Audiência</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="data_audiencia" id="data_audiencia" placeholder="Data de Audiência" required="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputdatobservacao" class="col-sm-2 col-form-label">Observação</label>
    <div class="col-sm-10">
      <textarea rows="4" class="form-control" cols="50" name="observacao" id="observacao" form="createcliente" placeholder="Observação"></textarea>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
      <a href="/" class=" btn btn-outline-primary ">Voltar</a>
    </div>

  </div>

</form>


@endsection