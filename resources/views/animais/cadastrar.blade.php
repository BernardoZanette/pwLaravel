{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

<form method="post" class="p-10 bg-white rounded shadow-xl w-1/3" action="{{ route('animais.gravar') }}">
    @csrf
    <div>
        <label class="text-lg block text-sm text-gray-600" for="nome">Nome</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="text" name="nome" placeholder="Belinha..." value="{{ old('nome') }}">
    </div>
    <div class="mt-2">
        <label class="text-lg block text-sm text-gray-600" for="idade">Idade</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="number" name="idade" placeholder="12 anos" value="{{ old('idade') }}">
    </div>
    <div class="mt-6">
        <input class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" type="submit" value="Gravar">
    </div>
</form>
@endsection