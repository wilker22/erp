<?php

namespace App\Http\Controllers;

use App\Cotacao;
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
        $cotacoes = Cotacao::all();
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
            $cotacao = Cotacao::create(['data_abertura' => date('Y-m-d')]);
        }
        $solicitacoes_abertas = Solicitacao::listaSolicitacaoPorStatus(1);
        $solicitacoes = SolicitacaoCotacao::listaPorIdCotacao($cotacao->id);

        //dd($solicitacoes);

        return view('cotacao.create', compact('cotacao', 'solicitacoes_abertas', 'solicitacoes'));
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
