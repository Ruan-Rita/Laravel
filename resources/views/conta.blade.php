@extends('layout.main')

@section('title','Logar no sistema')

@section('style')
    <link rel="stylesheet" href="/css/conta.css">
@endsection
@section('content')
        
    
    <div>
        @if(10 > 5)
            <p>Lindao</p>
            <p>{{ $nome }} and {{$idade}}</p>
        @endif
        <input type="text" placeholder="nome">
        <input type="text" placeholder="senha">
        <input type="submit" value="logar">
        @for ($i = 0; $i < count($array); $i++)
            <p>{{$array[$i]}}</p>
        @endfor
        @php
        echo "<p>HEHEHHEHEHH</p>";    
        @endphp
        @foreach ($nomes as $item)
            <h1>{{$item}}</h1>            
        @endforeach

        {{--
            Comentario do Blade
        --}}
@endsection