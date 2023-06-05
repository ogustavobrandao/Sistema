<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            text-align:center;
            border:0.5px solid;
            
            margin: 0 auto;

            width: 700px;
            height: 500px;
            display: flex;
            flex-direction: column;
            
            box-shadow: 1px 0px 1.2px 0px #e3e3e3; 
            border-radius:3px; 
            padding:1em;

        }
   </style>
    <title>Document</title>
</head>

<body>
<form class="form-dark" action="{{route('entradas.update', ['id'=> $entradas->id])}}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="formGroupExampleInput">origem</label>
    <input type="text" class="form-control" value= "{{$entradas->origem}}"id="origem" name="origem" placeholder="Input exemplo">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">valor</label>
    <input type="floatval" class="form-control" value="{{$entradas->valor}}" id="valor" name="valor" placeholder="Outro input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">datarecebimento</label>
    <input type="date" class="form-control" value="{{$entradas->datarecebimento}}" id="datarecebimento" name="datarecebimento" placeholder="Outro input">
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-ligth">Atualizar</button>
    </div>
  </div>
</form>

</body>
</html>