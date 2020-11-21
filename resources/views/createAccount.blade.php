@extends('layout.main')

@section('title','Nova Conta')

@section('style')
    <link rel="stylesheet" href="/css/createAccount.css">
@endsection
@section('content')
    
    <div class="content col-md-4 offset-md-4">
        <form action="/Criar" method="POST">
            @csrf
            <h1>Novo Funcionario</h1>
            <div class='form-group'>
                <label for='nome'>Funcionario</label>
                <input id="nome" class='form-control' type="text" placeholder="Nome" name='name'>
            </div>
            <div class='form-group'>
                <label for='email'>E-mail:</label>
                <input id="email" class='form-control' type="text" placeholder="Email" name='email'>
            </div>
            <div class='form-group'>
                <label for='tel'>Funcionario</label>
                <input id="tel" class='form-control' type="text" placeholder="Telefone" name='number'>
            </div>
            <div class='form-group'>
                <label for='senha'>Senha:</label>
                <input id="senha" class='form-control' type="text" placeholder="Senha" name='password'>
            </div>
            
            <input type="submit" class='btn btn-primary' value="Enviar" />
        </form>
        
    <div>
@endsection