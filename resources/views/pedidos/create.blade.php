@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caldinho do Fernando</title>  
  </head>
  <body>
    <div class="container">
      <h2>Pedido</h2><br/>
      <form method="post" action="{{url('pedidos')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
          <div class="col-md-2 offset-md-4">
            <div class="form-group">
                <lable>Mesas:</lable>
                <select name="mesa_id">
                  <option value="nenhuma mesa selecionada">Número da mesa</option>
                  @foreach($mesas as $mesa)
                    <option value="{{$mesa['id']}}">{{$mesa['number']}}</option>
                  @endforeach
                </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
                <lable>Produtos:</lable>
                <select name="produto_id">
                  <option value="nenhum produto selecionado">Número da produto</option>
                  @foreach($produtos as $produto)
                    <option value="{{$produto['id']}}">{{$produto['name']}} {{$produto['size']}}</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
@endsection