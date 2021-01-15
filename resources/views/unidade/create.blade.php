@extends('template')

@section('conteudo')

<div class="col-9 central mb-3">
    <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar unidade</span>

    @if(isset($unidade))
        <form action="{{ route('unidade.update', $unidade->id) }}" method="POST">
            @method('PUT')
    @else
        <form action="{{ route('unidade.store') }}" method="POST">
    @endif
            @csrf
                    <div class="col-6 d-block m-auto rows px-5 py-5">
                        <div class="col-12 mb-3">
                            <label class="text-label">Nome</label>
                            <input type="text" name="unidade" value="{{ isset($unidade->unidade) ? $unidade->unidade : null}}" class="form-campo" placeholder="Digite o nome da unidade">
                        </div>

                        <div class="col-12 mt-3 mb-5">
                            <input type="hidden" name="id_unidade" value="">
                            <input type="submit" name="" value="Salvar unidade" class="btn btn-laranja d-block m-auto">
                        </div>
                    </div>
              </form>

    </div>
@endsection
