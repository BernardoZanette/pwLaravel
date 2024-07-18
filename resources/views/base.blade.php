{{-- resources/views/base.blade.php --}}
<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1>@yield('titulo')</h1>
        <hr>
        <a href="{{route('index')}}">Inicial</a>
        |   
        <a href="{{route('animais')}}">Animais</a>
        |
        @if(Auth::user() && Auth::user()['admin'])
        <a href="{{route('usuario')}}">Lista de Usuários</a>
        |
        @endif
        <a href="{{route('usuario.cadastrar')}}">Registrar Usuário</a>
        |
        @if(Auth::user())
             Olá, <strong>{{Auth::user()['nome']}}</strong>
             <a href="{{route('logout')}}">Logout</a>
        @else
            <a href="{{route('login')}}">Login</a>
        @endif
        <hr>
        @yield('conteudo')
    </body>
</html>