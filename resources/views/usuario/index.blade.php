{{-- resources/views/usuarios/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <a href="{{ route('usuario.cadastrar') }}">Cadastrar Usuário</a>
</p>
<p>Veja nossa lista de usuarios!</p>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Login</th>
        <th>Admin</th>
        <th>Funções</th>
    </tr>

    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{ $usuario['nome'] }}</td>
        <td>{{ $usuario['email'] }}</td>
        <td>{{ $usuario['login'] }}</td>
        <td>{{ $usuario['admin']}}</td>
        <td>
            <a href="{{ route('usuario.editar', $usuario['id'])}}">Editar</a>
            <a href="{{ route('usuario.apagar', $usuario['id']) }}">Apagar</a>
        </td>
    </tr>
    @endforeach

</table>
@endsection