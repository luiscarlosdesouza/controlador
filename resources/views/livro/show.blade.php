@extends('layouts.master')

@section('title', 'Livros')

@section('content')



      <div class="page-header">
        <h1>Detalhes do Livro</h1>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
            <div class="panel-body">
              <a href="/livros/">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Lista
              </a>
            </div>

            <div class="panel-body">
              <a href="/livros/cria">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Livro
              </a>
            </div>
          </div>
        </div>


      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">

            <div class="panel-heading"><strong>Livro</strong></div>

            <ul class="list-group">


              <li class="list-group-item">{{$livro->nome}}</li>
              <li class="list-group-item">{{ $livro->preco }}</li>
              <li class="list-group-item">{{$livro->editora_id}}</li>
            </ul>
          </div>
        </div>
      </div>



@endsection
