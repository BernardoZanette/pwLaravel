@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')

<form method="post" action="">
    <input type="text" name="username" placeholder="Usuário">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="submit" value="Entrar">
</form>

@endsection