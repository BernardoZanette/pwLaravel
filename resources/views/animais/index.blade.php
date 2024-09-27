{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a class="px-4 py-1 text-white font-light tracking-wider bg-blue-700 rounded" href="{{ route('animais.cadastrar') }}"><i class="fas fa-plus mr-3"></i> Cadastrar animal</a>
</p>
<p class="text-xl pb-3 flex items-center mt-2 mb-2">
    <i class="fas fa-list mr-3"></i> Veja animais para doação!
</p>
<div class="bg-white overflow-auto">
    <table class="text-left w-full border-collapse">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nome</th>
                <th class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Idade</th>
                <th class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Funções</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($animais as $animal)
            @if ($loop->index % 2 !== 0)
                <tr class="hover:bg-grey-lighter bg-gray-200">
            @else 
                <tr class="hover:bg-grey-lighter">
            @endif
                <td class="text-center w-1/3 py-3 px-4"><a href="{{route('animais.ver', $animal['id'])}}">{{ $animal['nome'] }}</a></td>
                <td class="text-center py-3 px-4">{{ $animal['idade'] }}</td>
                <td class="text-center py-3 px-4"><a class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection