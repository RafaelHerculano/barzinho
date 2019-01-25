@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Garçons cadastrados</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Foto</th>
        <th colspan="2">Action</th>
        <th><a href="{{action('GarcomController@create')}}">Cadastrar</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($garcoms as $garcom)
      <tr>
        <td>{{$garcom['id']}}</td>
        <td>{{$garcom['name']}}</td>
        <td><img style="right: 100px; height: 100px;" src="/images/{{$garcom['filename']}}" alt=""></td>
        <td><a href="{{action('GarcomController@edit', $garcom['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('GarcomController@destroy', $garcom['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
@endsection