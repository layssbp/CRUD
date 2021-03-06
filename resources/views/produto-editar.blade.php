@extends('layout.base', ['current'=>'produtos'])

@section('body')
    <h1>Novo Produto</h1>
    <form action = "/produtos/editar/{{$p->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">        
            <label for="nome">Nome do Produto</label>
            <input type = "text" class = "form-control" name="nomeProduto" id = "nome" value = {{$p->nome}}>
            
            <label for="desc">Descrição do Produto</label>
            <textarea class = "form-control" name="descProduto" id = "desc"> {{$p->descricao}}</textarea>
            
            <label for="qtd">Quantidade do Produto</label>
            <input type = "number" class = "form-control" name="qtdProduto" id = "qdt" value = {{$p->quantidade}}>

            <label for="pc">Preço do Produto</label>
            <input step="any" type = "number" class = "form-control" name="pcProduto" id = "pc" value = {{$p->preco}}>

            <label for="img">Imagem</label>
            <input type="file" class="form-control-file" name="imagemProduto" id="img">
            <img class = "img-thumbnail" width = 25% src = "/storage/{{$p->imagem}}">  
        
        
        </div>
        <button type="submit" class = "btn btn-success btn-sm">Salvar</button>
        <button type="cancel" class = "btn btn-danger btn-sm">Cancelar</button>
    </form>
@endsection