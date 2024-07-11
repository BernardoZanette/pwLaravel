{{-- views/usuario/apagar.blade.php --}}
@extends('base')

@section('titulo', 'Apagar Usuário')

@section('conteudo')
    <p>Tem certeza que quer apagar?</p>
    <p><em>{{ $usuario['nome'] }}</em></p>
    <form action="{{route('usuario.apagar', $usuario['id'])}}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Deletar">
    </form>

    <a href="{{route ('usuario')}}">Cancelar</a>
@endsection