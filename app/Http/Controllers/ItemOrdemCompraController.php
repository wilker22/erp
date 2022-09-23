<?php

namespace App\Http\Controllers;

use App\ItemCotacao;
use App\ItemOrdemCompra;
use App\OrdemCompra;
use Illuminate\Http\Request;

class  ItemOrdemCompraController extends Controller
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
        
        return view('itemordemcompra.create');
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
       
        
        $item = ItemOrdemCompra::where("ordem_compra_id", $req['ordem_compra_id'])
                            ->where("produto_id", $req['produto_id']);
        if(!$item){
            ItemOrdemCompra::create($req);
        }
        OrdemCompra::atualiza_total($req['ordem_compra_id']);
        
        $lista = ItemOrdemCompra::listaPorIdOrdemCompra($req['ordem_compra_id']);
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
        
        $itens = ItemOrdemCompra::listaPorIdOrdemCompra($id);
        
        $ordem = OrdemCompra::getOrdemCompra($id);
         
        return view('itemordemcompra.create', compact('ordem', 'itens'));
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
        $item = ItemOrdemCompra::where("id",$id)->first();
        $id_ordem = $item->ordem_compra_id;
        $item->delete();
        OrdemCompra::atualiza_total($id_ordem);
        $lista = ItemOrdemCompra::listaPorIdOrdemCompra($id_ordem);
        return response()->json($lista);

    }
}
