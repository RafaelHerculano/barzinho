@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pedidos cadastrados</title>
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
        <th>Mesa</th>
        <th>produto</th>
        <th colspan="2">Action</th>
        <th><a href="{{action('PedidoController@create')}}">Cadastrar</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($pedidos as $pedido)
      <tr>
        <td>{{$pedido['id']}}</td>
        <td>{{$pedido['mesa']}}</td>
        <td>{{$pedido['produto']}}</td>
        <td><a href="{{action('PedidoController@edit', $pedido['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ProdutoController@destroy', $pedido['id'])}}" method="post">
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