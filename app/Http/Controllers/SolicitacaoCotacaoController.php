<?php

namespace App\Http\Controllers;

use App\Solicitacao;
use App\SolicitacaoCotacao;
use Illuminate\Http\Request;

class SolicitacaoCotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $inseriu = SolicitacaoCotacao::create($req);
        if($inseriu){
            Solicitacao::where('id', $inseriu->solicitacao_id)->update(['status_solicitacao_id' => 2]);
        }
        return redirect()->route('cotacao.create');
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
    public function excluir($id, $id_solicitacao)
    {
        SolicitacaoCotacao::where('id', $id)->delete();
        Solicitacao::where('id', $id_solicitacao)->update(['status_solicitacao_id' => 1]);
        return redirect()->route('cotacao.create');
    }
}
