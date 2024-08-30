{{-- views/animais/apagar.blade.php --}}
@extends('base')

@section('titulo', 'Apagar | Animais para adoção')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em>{{ $animal['nome'] }}</em></p>

<form action="{{ route('animais.apagar', $animal['id']) }}" method="post">
@method('delete')
@csrf

<input type="submit" value="Pode apagar sem medo" class="mb-4 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">

</form>

<a class="bg-white hover:bg-green-500 hover:text-white text-green-800 font-semibold py-2 px-4 border border-green-400 rounded shadow" href="{{ route('animais') }}">Cancelar</a>
@endsection