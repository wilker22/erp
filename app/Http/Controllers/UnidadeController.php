<?php

namespace App\Http\Controllers;


use App\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidade::all();
        return view('unidade.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unidade = new Unidade();
        $unidade->unidade = $request->input("unidade");
        $unidade->save();

        return redirect()->route('unidade.index');

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
        $unidade = Unidade::find($id);
        if(!$unidade){
            return redirect('unidade');
        }
        return view('unidade.create', compact('unidade'));

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
        $unidade = Unidade::find($id);
        if($unidade){
            $unidade->unidade =  $request->input("unidade");
            $unidade->update();
        }
        return redirect('unidade');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidade = Unidade::find($id);
        if($unidade){
            $unidade->delete();
        }

        return redirect()->route('unidade.index');


    }
}
