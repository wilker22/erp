<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Cotacao;
use App\FornecedorCotacao;
use App\ItemCotacao;
use App\Solicitacao;
use App\SolicitacaoCotacao;
use Illuminate\Http\Request;

class CotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotacoes = Cotacao::lista();
        return view('cotacao.index', compact('cotacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cotacao = Cotacao::where('status_cotacao_id', 1)->first();

        if(!$cotacao){
            $cotacao = Cotacao::create(['data_abertura' => date('Y-m-d'), 'status_cotacao_id' => 1]);
        }
        $solicitacoes_abertas = Solicitacao::listaSolicitacaoPorStatus(1);
        $solicitacoes = SolicitacaoCotacao::listaPorIdCotacao($cotacao->id);
        $fornecedores = Contato::where('eh_fornecedor', 'S')->get();
        $fornecedores_cotacao = FornecedorCotacao::listaPorIdCotacao($cotacao->id);
        return view('cotacao.create', compact('cotacao', 'solicitacoes_abertas', 'solicitacoes', 'fornecedores', 'fornecedores_cotacao'));
    }

    public function finalizar($id)
    {
        $solicitacoes = SolicitacaoCotacao::listaPorIdCotacao($id);
        $fornecedores = FornecedorCotacao::listaPorIdCotacao($id);

        if(!$solicitacoes || !$fornecedores){
            return redirect()->route('cotacao.create');
        }

        foreach($fornecedores as $f){
            foreach($solicitacoes as $s){
                $item = new ItemCotacao();

                $item->cotacao_id = $id;
                $item->fornecedor_id = $f->id;
                $item->solicitacao_id = $s->id;
                $item->status_item_cotacao_id = 1;
                $item->produto_id = $s->id_produto;
                $item->qtde = $s->qtde;

                $item->save();
            }
        }

        Cotacao::where('id', $id)->update(['status_cotacao_id' => 2]);

        return redirect()->route('cotacao.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
