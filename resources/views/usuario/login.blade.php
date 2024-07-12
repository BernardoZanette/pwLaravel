@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')

@if(session('erro'))
    <div style="background-color:red; color:white">
        {{session('erro')}}
    </div>
@endif

@if($errors->any())
<div>
    <h4>Preencha o formulário</h4>
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form method="post" action="">
    @csrf
    <input type="text" name="login" placeholder="Usuário">
    <br>
    <input type="password" name="senha" placeholder="Senha">
    <br>
    <input type="submit" value="Entrar">
</form>

@endsection