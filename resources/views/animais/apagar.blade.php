{{-- views/animais/apagar.blade.php --}}
@extends('base')

@section('titulo', 'Apagar | Animais para adoção')

@section('conteudo')
    <p>Tem certeza que quer apagar?</p>
    <p><em>{{ $animal['nome'] }}</em></p>
    <form action="{{route('animais.apagar', $animal['id'])}}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Deletar">
    </form>

    <a href="{{route ('animais')}}">Cancelar</a>
@endsection