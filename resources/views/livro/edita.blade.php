@extends('layouts.master')

@section('title', 'Edita Livro')

@section('page-header-content', 'Edição de Livro')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/editoras">
            <span class="glyphicon glyphicon-th-list"></span> Livros
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/livros/{{$livro->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('patch')}}
        <div class="form-group">
          <label for="nome">Nome</label>
          <input value="{{$livro->nome}}"type="text" class="form-control" name="nome" id="nome" >
        </div>
        <div class="form-group">
          <label for="preco">Preço</label>
          <input value="{{"$livro->preco"}}"  type="text" class="form-control" name="preco" id="preco">
        </div>
        <div class="form-group">
          <label for="editora_id">Editora</label>
          <input value="{{"$livro->editora_id"}}"  type="text" class="form-control" name="editora_id" id="editora_id">
        </div>

        <div class="form-group">
              <label for="editora_id">Mudar Editora</label>
              <select name="editora_id" id="editora_id" class="form-control">
                <option></option>
                @foreach($editoras as $editora)

                  <option value="{{ $editora->id }}">{{ $editora->nome }}</option>
                @endforeach
              </select>


        </div>

        <button class="btn btn-primary">Atualizar</button>
      </form>
    </div>
  </div>
@endsection
