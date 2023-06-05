@extends('layouts.main')


@section('title', 'Pagina Inicial')

@section('content')

<h1 class="text-white display-3">Lista de Atividades</h1>
<div>
  <table class="table table-dark  table-hover">
    <form action="listas.index" method="GET">
        <thead class= "bg-primary">
            <tr >
            <th scope="col">id</th>
            <th scope="col">tarefa</th>
            <th scope="col">Status</th>
            <th scope="col">editar</th>
            <th scope="col">deletar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lista1 as $lista)
          
            <tr>
              <th scope="row">{{$lista->id}}</th>
              <td>{{$lista->tarefa}}</td>
              @if($lista->status == false)
              <td class=" text-danger">Em andamento</td>
              @else
              <td class=" text-success">Concluída</td>
              @endif
              <td>
                  <a href="{{route('listas.edit', ['id'=>$lista->id])}}" class= "btn-primary" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                  </a>
                </td>
                <td>
                <a href="{{route('listas.destroy', ['id'=>$lista->id])}}" class= "btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
                </a>
              </td>
            </tr>
          
        @endforeach
        @foreach($lista2 as $lista)
          
            <tr>
              <th scope="row">{{$lista->id}}</th>
              <td>{{$lista->tarefa}}</td>
              @if($lista->status == false)
              <td class=" text-danger">Em andamento</td>
              @else
              <td class=" text-success">Concluída</td>
              @endif
              <td>
                  <a href="{{route('listas.edit', ['id'=>$lista->id])}}" class= "btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                  </a>
                </td>
              <td>
                <a href="{{route('listas.destroy', ['id'=>$lista->id])}}" class= "btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
                </a>
              </td>
            </tr>
          
        @endforeach
    </div>
  </form>
</table>
<form action="{{route('listas.create')}}" method="GET">
        @csrf
        
        <button type="submit" class= "btn btn-success">
          Nova Tarefa
        </button>
    </form>
      <a href="{{route('listas.gerar')}}" class="btn btn-primary" target="_blank">Gerar PDF</a>

@endsection
