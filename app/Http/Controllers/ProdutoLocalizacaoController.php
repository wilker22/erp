<?php

namespace App\Http\Controllers;

use App\Localizacao;
use App\Produto;
use App\ProdutoLocalizacao;
use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionContextPass;

class ProdutoLocalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        $locais = Localizacao::all();
        $pl =  new ProdutoLocalizacao();
        $lista = $pl->lista();
        return view('produtolocalizacao.create', compact('produtos', 'locais', 'lista'));
    }

    public function listaPorProduto($id_produto)
    {
        $lista = ProdutoLocalizacao::where('produto_id', $id_produto)
                        ->join('localizacaos',
                               'produto_localizacaos.localizacao_id',
                               '=',
                               'localizacaos.id')->get();
                      //  dd($lista);
        return response()->json($lista);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->all();
        $existe = ProdutoLocalizacao::where('produto_id', $req['produto_id'])
                                    ->where('localizacao_id', $req['localizacao_id'])->first();
        if(!$existe){
            ProdutoLocalizacao::create($req);
        }

        return redirect()->route('produtolocalizacao.index');
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


}
