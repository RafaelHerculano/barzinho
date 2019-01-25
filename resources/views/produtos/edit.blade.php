<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caldinho do Fernando </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Produtos</h2><br  />
        <form method="post" action="{{action('ProdutoController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" value="{{$produto->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Tamanho</lable>
                <select name="size">
                  <option value="P"  @if($produto->size=="P") selected @endif>Pequeno</option>
                  <option value="M"  @if($produto->size=="M") selected @endif>Médio</option>
                  <option value="G" @if($produto->size=="G") selected @endif>Grande</option>
                </select>
            </div>
        </div>        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Preço:</label>
            <input type="number" class="form-control" name="price" value="{{$produto->price}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
