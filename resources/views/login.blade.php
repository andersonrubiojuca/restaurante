@extends('component.layout')

@section('conteudo')
@if(Session::get('login'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{Session::get('login')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="col-sm-6">
    <form method="post" action="/login">
        @csrf   
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
@stop
