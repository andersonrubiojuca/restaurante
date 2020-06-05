@extends('component.layout')

@section('conteudo')
<h1>A Lista do Restaurante está aqui</h1>
@if(Session::get('estado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('estado')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
      <th scope="col">Operações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dados as $dado)
        <tr>
            <th scope="row">{{$dado->id}}</th>
            <td>{{$dado->nome}}</td>
            <td>{{$dado->email}}</td>
            <td>{{$dado->endereco}}</td>
            <td>
              <a href="deletar/{{$dado->nome}}">
                <i class="fa fa-trash" style="color: black;"></i>
              </a>
              <a href="editar/{{$dado->nome}}">
                <i class="fa fa-edit" style="color: black;"></i>
              </a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@stop