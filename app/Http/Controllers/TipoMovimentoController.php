<?php

namespace App\Http\Controllers;

use App\TipoMovimento;
use Illuminate\Http\Request;

class TipoMovimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipomovimentos = TipoMovimento::all();

        return view('tipomovimento.index', compact('tipomovimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipomovimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TipoMovimento::create($request->all());
        return redirect()->route('tipomovimento.index');
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
        $tipomovimento = TipoMovimento::find($id);
        if(!$tipomovimento){
            return redirect()->route('tipomovimento.index')->with('error', "Tipo não encontrado!");
        }
        return view('tipomovimento.create', compact($tipomovimento));
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
        $tipomovimento = TipoMovimento::find($id);
        if(!$tipomovimento){
            redirect()->route('tipomovimento.index');
        }

        $update = $tipomovimento->update($request->all());
        if(!$update){
            return redirect()->back()->with('error', "Ocorreu erro ao Atualizar!");

        }
        return redirect()->route('tipomovimento.index')->with('success', "Atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipomovimento = TipoMovimento::find($id);
        if(!$tipomovimento){
            return redirect()->back()->with('error', "Ocorreu erro ao Remover!");
        }
        $tipomovimento->delete();

        return redirect()->route('tipomovimento.index')->with('success', "Removido com sucesso");
    }
}
