
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Entradas</title>

   <style>
     form {
  text-align:center;
  border:2px solid;
  
  width: 800px;
  height:500px;
  margin: 0 auto;
  
}
   </style>
    
</head>
<body>
    
<br>
<form class="btn-dark" action="{{route('entradas.store')}}" method="POST">
    @csrf
    
  <div class="form-group">
    <label for="formGroupExampleInput">origem</label>
    <input type="text" class="form-control" id="origem" name="origem" placeholder="Input exemplo">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">valor</label>
    <input type="floatval" class="form-control" id="valor" name="valor" placeholder="Outro input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">datarecebimento</label>
    <input type="date" class="form-control" id="datarecebimento" name="datarecebimento" placeholder="Outro input">
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-ligth">Entrar</button>
    </div>
  </div>
</form>

</body>
</html>