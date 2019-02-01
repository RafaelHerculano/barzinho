@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mesas cadastradas</title>
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
        <th>Número</th>
        <th colspan="2">Action</th>
        <th><a href="{{action('MesaController@create')}}">Cadastrar</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($mesas as $mesa)
      <tr>
        <td>{{$mesa['id']}}</td>
        <td>{{$mesa['number']}}</td>
        <td><a href="{{action('MesaController@edit', $mesa['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('MesaController@destroy', $mesa['id'])}}" method="post">
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