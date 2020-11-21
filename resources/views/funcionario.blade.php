@extends('layout.main')

@section('title','Funcionario Cadastrado')

@section('style')
    <link rel="stylesheet" href="/css/funcionario.css">
@endsection
@section('content')

<div class="col-md-6 offset-md-3">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Tell</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($funcionario as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->Nome}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->tel}}</td>
      </tr>  
      @endforeach      
    </tbody>
  </table>
</div>

@endsection