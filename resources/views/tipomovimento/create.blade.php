@extends('template')

@section('conteudo')


<div class="col-9 central mb-3">
    <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar categoria</span>

    @if (isset($tipomovimento))
        <form action="{{ route('tipomovimento.update', $tipomovimento->id ) }}" method="Post">
            @method('PUT')
    @else
        <form action="{{ route('tipomovimento.store') }}" method="Post">
    @endif

    @csrf
                    <div class="col-6 d-block m-auto rows px-5 py-5">
                    <div class="col-12 mb-3">
                        <label class="text-label">Tipo Movimento</label>
                        <input type="text" name="tipo_movimento" value="" class="form-campo" placeholder="Digite o nome da categoria">
                    </div>
                    <div class="col-12 mb-3">
                            <label class="text-label">Entrada/Saída</label>
                            <select name="ent_sai" class="form-campo">
                                <option value="E">Entrada</option>
                                <option value="S">Saída</option>
                            </select>

                    </div>
                    <div class="col-12 mt-3 mb-5">
                          <input type="submit" name="" value="Inserir Tipo de Movimento" class="btn btn-laranja d-block m-auto">
                    </div>
                </div>
            </form>
    </div>
@endsection
