@extends('component.layout')

@section('conteudo')
<div class="col-sm-6">
    <form method="post" action="adicionar">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>
@stop