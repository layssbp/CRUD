<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos', compact('produtos'));
    }

    public function create()
    {
        $cats = Categoria::all();
        return view ('produto-novo', compact('cats'));
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nomeProduto');
        $produto->descricao = $request->input('descProduto');
        $produto->id_categoria = $request->input('catProduto');
        $produto->quantidade = $request->input('qtdProduto');
        $produto->preco = $request->input('pcProduto');
        $path = $request->file('imagemProduto')->store('images', 'public');
        $produto->imagem = $path;
        $produto->save();
        return redirect('/produtos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
