{{-- resources/views/usuarios/login.blade.php --}}

@extends('base')

@section('titulo', 'Login')

@section('conteudo')

@if($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
    <h4>Preenche a porcaria do formulário</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

<form class="p-10 bg-white rounded shadow-xl" method="post" action="{{route('login')}}">
    @csrf
    <div class="">
        <label class="block text-sm text-gray-600" for="login">Usuário</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="login" name="login" type="text" placeholder="usuario5678" aria-label="login">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="senha">Senha</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="senha" name="senha" type="password" placeholder="1234" aria-label="senha">
    </div>
    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-700 rounded" type="submit">Entrar</button>
    </div>
</form>

@endsection