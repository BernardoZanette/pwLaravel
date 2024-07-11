{{-- views/usuario/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastro')

@section('conteudo')

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

<form method="post" action="{{ route('usuario.gravar') }}">
    @csrf
    <input type="text" name="nome" value="{{$usuario->nome}}" placeholder="Nome" value="{{ old('nome') }}">
    <br>
    <input type="text" name="email" value="{{$usuario->email}}" placeholder="Email" value="{{ old('email') }}">
    <br>
    <input type="text" name="login" value="{{$usuario->login}}" placeholder="Login" value="{{ old('login') }}">
    <br>
    <input type="password" name="senha" placeholder="Senha" value="{{ old('senha') }}">
    <br>
    <label for="admin">Admin</label>
    <input type="checkbox" value="{{$usuario->admin}}" name="admin" id="admin" value="{{ old('admin') }}">
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection