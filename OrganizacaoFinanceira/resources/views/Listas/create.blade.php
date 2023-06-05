@extends('layouts.main')


@section('title', 'Nova atividade')

@section('content')
   <style>
     form {
  text-align:center;
  border:2px solid;
  
  width: 800px;
  height:500px;
  margin: 0 auto;
  
}
   </style>
 

    
<br>
<form class="btn-dark" action="{{route('listas.store')}}" method="POST">
    @csrf
    
  <div class="form-group">
    <label for="formGroupExampleInput">origem</label>
    <input type="text" class="form-control" id="tarefa" name="tarefa" placeholder="Insira a nova atividade">
  </div>
  <div class="form-group">
    <label for="status">Status</label>

    <select name="status" id="status_tarefa" class="form-control">
        <option value="" selected hidden>Escolher...</option>
        <option value="false">Pendente</option>
        <option value="true">Concluído</option>
    </select>
</div>



  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Entrar</button>
    </div>
  </div>
</form>


@endsection
