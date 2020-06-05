@extends('component.layout')

@section('conteudo')
<div class="col-sm-6">
    <form method="post" action="/registrar">
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
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
        </div>
        <div class="form-group">
            <label for="contato">Contato</label>
            <input type="text" name="contato" class="form-control" id="contato" placeholder="Endereço">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@stop
