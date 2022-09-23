<?php

namespace App\Http\Controllers;

use App\Contato;
use App\OrdemCompra;
use Illuminate\Http\Request;

class OrdemCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = OrdemCompra::lista();
        return view('ordemcompra.index', compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aberta = OrdemCompra::where('status_ordem_compra_id', 1)->first();
        if(!$aberta){
            $fornecedores = Contato::where('eh_fornecedor', 'S')->get();
            return view('ordemcompra.create', compact('fornecedores'));
        }
        return redirect()->route('itemordemcompra.edit', $aberta->id);
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
        $ordem = OrdemCompra::create($req);
        return redirect()->route('itemordemcompra.edit', $ordem->id);
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

    public function finalizar($id_ordem)
    {
        OrdemCompra::where('id', $id_ordem)->update(['finalizada' => 'S', 'status_ordem_compra_id => 2']);
        return redirect()->route('ordemcompra');
    }

    public function aprovar($id_ordem)
    {
        OrdemCompra::where('id', $id_ordem)->update(['finalizada' => 'S', 'status_ordem_compra_id => 2']);
        return view('ordemcompra.aprovar');
    }
}
