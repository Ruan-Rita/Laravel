@extends('layout.main')

@section('title','Nova Conta')

@section('style')
    <link rel="stylesheet" href="/css/createAccount.css">
@endsection
@section('content')
    @if ($id != null and $nome != '' and $email != '')
        <p>id: {{$id}}</p>
        <p>Funcionario: {{$nome}}</p>
        <p>email: {{$email}}</p>
    @endif
{{-- 
    @if ($busca != '')
        <p>O usuario está buscando por {{$busca}}</p>
    @endif --}}
    
    <div class="content">
        <h1>Novo Funcionario</h1>
        <input type="text" placeholder="name">
        <br>
        <input type="text" placeholder="email">
        <br>
        <input type="text" placeholder="tel">
        <br>
        <input type="text" placeholder="cpf">
        <br>
        <input type="text" placeholder="senha">
        <br>
        <Button type="button">Cadastrar</Button>
    <div>
@endsection