@extends('layout.main')

@section('title','Funcionario Cadastrado')

@section('style')
    <link rel="stylesheet" href="/css/funcionario.css">
@endsection
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
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
@endsection