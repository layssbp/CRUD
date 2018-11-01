@extends('layout.base', ["current"=>"clientes"])

@section('body')
    <h1>Editar Cliente</h1>
    <form action = "/clientes/editar/{{$c->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">        
            <label for="nome">Nome</label>
            <input type = "text" class = "form-control" name="nomeCliente" id = "nome" value = "{{$c->nome}}">
            <label for="telefone">Telefone</label>
            <input type = "text" class = "form-control" name="telefoneCliente" id = "telefone" value = "{{$c->telefone}}">
            <label for="data">Data de Nascimento</label>
            <input type = "date" class = "form-control" name="dtNascimentoCliente" id = "data" value = "{{$c->dataNascimento}}">
            <label for="rua">Rua</label>
            <input type = "text" class = "form-control" name="rua" id = "rua" value = "{{$c->endereco['rua']}}">
            <label for="bairro">Bairro</label>
            <input type = "text" class = "form-control" name="bairro" id = "bairro" value = "{{$c->endereco['bairro']}}">
            <label for="numero">Número</label>
            <input type = "text" class = "form-control" name="numero" id = "numero" value = "{{$c->endereco['numero']}}">
            <label for="cidade">Cidade</label>
            <input type = "text" class = "form-control" name="cidade" id = "cidade" value = "{{$c->endereco['cidade']}}">
            <label for="cep">CEP</label>
            <input type = "text" class = "form-control" name="cep" id = "cep" value = "{{$c->endereco['cep']}}">
            <label for="uf">UF</label>
            <input type = "text" class = "form-control" name="uf" id = "uf" value = "{{$c->endereco['uf']}}">
        </div>
        
        <button type="submit" class = "btn btn-success btn-sm">Salvar</button>
        <button type="cancel" class = "btn btn-danger btn-sm">Cancelar</button>
    </form>
@endsection