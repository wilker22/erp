@extends('template')

@section('conteudo')
<div class="col-9 central mb-3">
    <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar produto</span>

    <ul>
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>

    @if(isset($produto))
        <form action="{{ route('produto.update', $produto->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
        <form action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data">
    @endif
        @csrf
        <div class="rows p-4">
                 <div class="col-4">
                                    <div class="py-1 px-2 mt-3 border text-center">
                                            <img src="{{ asset('storage/upload/no_image.jpg') }}" class="img-fluido opaco">
                                    </div>
                            </div>
                            <div class="col-8 px-2">
                               <div class="rows">
                                    <div class="col-12 mb-3">
                                            <label class="text-label">Titulo do produto</label>
                                            <input type="text" value="" name="produto" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-6 mb-3">

                                            <label class="text-label">Categoria</label>

                                            <select class="form-campo" name="categoria_id">

                                                @foreach ($categorias as $categoria)
                                                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                                                @endforeach

                                            </select>
                                    </div>

                                    <div class="col-6 mb-3">
                                            <label class="text-label">Unidade</label>
                                            <select class="form-campo" name="unidade_id">
                                                @foreach ($unidades as $unidade)
                                                    <option value="{{ $unidade->id }}">{{ $unidade->unidade }}</option>
                                                @endforeach
                                           </select>
                                    </div>

                                    <div class="col-6 mb-3">
                                            <label class="text-label">Upload da imagem</label>
                                            <input type="file" name="arquivo" class="form-campo">
                                    </div>
                                    <div class="col-6 mb-3">
                                            <label class="text-label">Nome da Imagem</label>
                                            <input type="text" value="" name="nome_imagem" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-3 mb-3">
                                            <label class="text-label">Preço</label>
                                            <input type="text" name="preco" value="" placeholder="Digite aqui..." class="form-campo">
                                    </div>

                                    <div class="col-3 mb-3">
                                            <label class="text-label">Ativo</label>
                                            <select class="form-campo" name="ativo">
                                                    <option value="S">Sim</option>
                                                    <option value="N">Não</option>
                                            </select>
                                    </div>

                                    <div class="col-3 mb-3">
                                        <label class="text-label">É Insumo?</label>
                                        <select class="form-campo" name="eh_insumo">
                                                <option value="S">Sim</option>
                                                <option value="N">Não</option>
                                        </select>
                                    </div>

                                    <div class="col-3 mb-3">
                                        <label class="text-label">É Produto?</label>
                                        <select class="form-campo" name="eh_produto">
                                            <option value="S">Sim</option>
                                            <option value="N">Não</option>
                                        </select>
                                    </div>
                                   <div class="col-12 mt-2">
                                        <input type="hidden" name="id_produto" value="">
                                        <input type="submit" value="Salvar alterações" class="btn btn-laranja btn-medio d-block m-auto">
                                </div>
                            </div>


                            </div>
        </form>
    </div>
    </div>
@endsection
