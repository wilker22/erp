@extends('template')

@section('conteudo')


<div class="col-9 central mb-3">
    <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar ordem de compra avulsa</span>

    <form action="{{ route('ordemcompra.store') }}" method="Post">
        @csrf
                <div class="col-6 d-block m-auto rows px-5 py-5">
                    <div class="col-12 mb-3">
                        <label class="text-label">Data</label>
                        <input type="date" name="data_emissao" value="" class="form-campo" placeholder="Digite o nome da categoria">
                    </div>
                    <div class="col-12 mb-3">
                            <label class="text-label">Fornecedor</label>
                            <select name="fornecedor_id" class="form-campo">
                                @foreach ($fornecedores as $fornecedor)
                                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome}}</option>
                                @endforeach
                            </select>

                    </div>
                    <div class="col-12 mt-3 mb-5">
                        <input type="hidden" name="avulsa" value="S">
                        <input type="hidden" name="status_ordem_compra_id" value="1">
                        <input type="submit" name="" value="Inserir" class="btn btn-laranja d-block m-auto">
                    </div>
                </div>
            </form>
    </div>
@endsection
