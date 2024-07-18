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
        <a href="{{route('usuario')}}">Lista de Usuários</a>
        |
        <a href="{{route('usuario.cadastrar')}}">Registrar Usuário</a>
        |
        @if(Auth::user())
        <a href="{{route('logout')}}">Logout</a>
        @else
        <a href="{{route('login')}}">Login</a>
        @endif
        <hr>
        @if(Auth::user())
        Olá, {{Auth::user()['nome']}}
        @endif
        @yield('conteudo')
   
    </body>
</html>