@extends('component.layout')

@section('conteudo')
<div class="col-sm-6">
    <form method="post" action="/editar">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" value="{{$dados->nome}}" placeholder="Digite o nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{$dados->email}}" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="endereco" value="{{$dados->endereco}}" placeholder="Endereço">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@stop