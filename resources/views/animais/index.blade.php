{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a class="px-4 py-1 text-white font-light tracking-wider bg-blue-700 rounded" href="{{ route('animais.cadastrar') }}"><i class="fas fa-plus mr-3"></i> Cadastrar animal</a>
</p>
<p>Veja nossa lista de animais para adoção</p>

<table border="1" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 text-center">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th class="px-6 py-3">Nome</th>
            <th class="px-6 py-3">Idade</th>
            <th class="px-6 py-3">Funções</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($animais as $animal)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $animal['nome'] }}</td>
            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $animal['idade'] }}</td>
            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><a href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection