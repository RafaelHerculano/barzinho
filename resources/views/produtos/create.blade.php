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
      <h2>Cadastrar produtos</h2><br/>
      <form method="post" action="{{url('produtos')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nome:</label>
            <input type="text" class="form-control" name="name" required="">
          </div>
        </div>        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Selecione o tamanho</lable>
                <select name="size" required="">
                  <option value="P">Pequeno</option>
                  <option value="M">Médio</option>
                  <option value="G">Grande</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Preço:</label>
            <input type="text" class="form-control" name="price" required="">
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