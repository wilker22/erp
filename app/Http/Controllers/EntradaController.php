<?php

namespace App\Http\Controllers;

use App\Entrada;
use App\Movimento;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Entrada::lista(date('Y-m-d'));
        $soma = Entrada::total(date('Y-m-d'));
        return view('entrada.index', compact('lista', 'soma'));
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
        $req['data_entrada'] = date('Y-m-d');
        $entrada =  Entrada::create($req);

        //operações na tabela de Movimentações
        $mov = new Movimento();
        $mov->localizacao_id        = $entrada->localizacao_id;
        $mov->tipo_movimento_id     = 1;
        $mov->produto_id            = $entrada->produto_id;
        $mov->entrada_id            = $entrada->id;
        $mov->ent_sai               = 'E';
        $mov->data_movimento        = $entrada->data_entrada;
        $mov->qtde_movimento        = $entrada->qtde_entrada;
        $mov->valor_movimento       = $entrada->valor_entrada;
        $mov->subtotal_movimento    = $entrada->subtotal_entrada;
        $mov->descricao = "Entrada Num.: " . $entrada->id;
        $mov->saldoestoque          = 0;

        $mov->save();

        $lista = Entrada::lista(date('Y-m-d'));

        return response()->json($lista);
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
