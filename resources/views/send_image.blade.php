@extends('layout.main')

@section('title','Imagens para enviar ao servidor')

@section('style')
    <link rel="stylesheet" href="/css/send_image.css">
@endsection
@section('content')
<div class="content col-md-4 offset-md-4">
    <form action="/Enviar-Imagem" method="POST" enctype="multipart/form-data" >
        @csrf
        <h1>Enviar Imagem </h1>
        <div class='form-group'>
            <label for='img'>Imagem:</label>
            <input id="img" class='form-control-file' type="file" name='img'>
        </div>
        <input type="submit" class='btn btn-primary' value="Enviar" />
    </form>
    
<div>
@endsection