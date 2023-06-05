@extends('layouts.main')


@section('title', 'Nova atividade')

@section('content')


    
<br>
<form class="btn-dark" action="{{route('listas.update', ['id'=> $listas->id])}}" method="POST">
    @csrf
    @method('PUT')
    
  <div class="form-group">
    <label for="formGroupExampleInput">Tarefa</label>
    <input type="text" class="form-control" value= "{{$listas->tarefa}}" id="tarefa" name="tarefa" placeholder="Insira a nova atividade">
  </div>
  <div class="form-group">
    <label for="status">Status</label>

    <select name="status" id="status" class="form-control">
        <option value="{{$listas->tarefa}}" selected hidden>Escolher...</option>
        <option value="false">Pendente</option>
        <option value="true">Concluído</option>
    </select>
</div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Editar</button>
    </div>
  </div>
</form>


@endsection
