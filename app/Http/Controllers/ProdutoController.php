<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Categoria;
use App\Http\Requests\ProdutoRequest;
use App\Produto;
use App\Unidade;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $unidades = Unidade::all();
        return view('produto.create', compact('categorias', 'unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        $request->validate([
            "produto" => 'required'
        ]);

        $nome_imagem = $request->nome_imagem;

        if($request->hasFile('arquivo') && $request->file('arquivo')->isValid()){
            $nome_imagem = $request->arquivo->getClientOriginalName();
            $request->arquivo->storeAs('upload', $nome_imagem);
        }

        $produto = new Produto();
        $produto->produto = $request->input('produto');
        $produto->categoria_id = $request->input('categoria_id');
        $produto->unidade_id = $request->input('unidade_id');
        $produto->imagem = $nome_imagem;
        $produto->preco = $request->input('preco');
        $produto->ativo = $request->input('ativo');
        $produto->eh_produto = $request->input('eh_produto');
        $produto->eh_insumo = $request->input('eh_insumo');

        $produto->save();

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pesquisa()
    {
        $q = $_GET["q"];
        $produtos = Produto::where('produto', 'like', "%$q%")->get();
        return response()->json($produtos);
    }
}
