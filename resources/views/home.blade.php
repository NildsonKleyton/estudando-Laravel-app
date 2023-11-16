@extends('layout')

@section('titulo')
    <title>{{ $titulo }}</title>
@endsection

@section('conteudo')
    {{-- 
    <div>
        <p>Esta é a home page de Heitor Honorato <b style="color: rgb(0, 85, 255)">♥</b style="color: red"></p>
    </div>

    {{ -- Usando php no blade -- }}

    <p>{{ $texto }}</p>
    <p>{{ rand(1, $valor) }}</p>
    <a href="{{ route('minha_route') }}">Link ☻♥♣♦♠</a>
    --}}

    {{-- @if ($valor == 100)
        <br>Valor: R$ {{$valor}}
    @else
        Valor: R$ --
    @endif
    
    @isset($valor) 
        <br>sim, existe
    @endisset

    @empty($teste)
        <br> Esta vázio
    @endempty

    @switch()
        @case()
            
            @break
        
        @case()
            
            @break
    
        @default
            
    @endswitch --}}

    {{-- @foreach ($nomes as $nome)
        <p>{{$nome}}</p>
    @endforeach --}}

    {{-- @forelse ($nomes as $nome)
        <p>{{ $nome }}</p>
    @empty
        <p>Não tem nome</p>
    @endforelse --}}

    @foreach ($nomes as $nome)
        {{-- Esta é a aprimeira interação --}}
        @if ($loop->first)
            <p>{{ $nome }}</p>
        @endif

        @if ($loop->last)
            {{-- Esta é a ultima interação --}}
            <p>{{ $nome }}</p>
        @endif
    @endforeach

    @csrf {{-- Protege o formulário de ataques --}}
@endsection

{{-- mesmo que a section esta em baixo será exibida conforme a ordem do layout --}}
@section('mensagem')
    <p><b>Mesagem de erro ou de sucesso.</b></p>
@endsection
