@extends('layout.base', ["current"=>"categorias"])

@section('body')
    <h1>Categorias</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categorias as $c)
      <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->nome}}</td>
        <td>
          <a class="btn btn-primary" href="categorias/editar/{{$c->id}}">Editar</a>
          <a class="btn btn-danger" href="categorias/apagar/{{$c->id}}">Apagar</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<a class="btn btn-success" href="categorias/nova">Insira nova categoria</a>
@endsection