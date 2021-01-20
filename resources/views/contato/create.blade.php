@extends('template')

@section('conteudo')

<div class="col-9 central mb-3">
    <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar contato</span>

    <ul>
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>

    @if(isset($contato))
        <form action="{{ route('contato.update', $contato->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
    @else
        <form action="{{ route('contato.store') }}" method="POST" enctype="multipart/form-data">
    @endif

    @csrf
       <div id="tab">
          <ul>
            <li><a href="#tab-1">Dados gerais</a></li>
            <li><a href="#tab-2">Endereço</a></li>
            <li><a href="#tab-3">Informações adicionais</a></li>
          </ul>

          @php
            $uf = isset($contato->uf) ? $contato->uf : old('uf');
            $ativo = isset($contato->ativo) ? $contato->uf : old('ativo');
          @endphp

          <div id="tab-1">
            <div class="p-2">
                    <span class="d-block mt-4 mb-4 h4 border-bottom text-uppercase">Informações básicas</span>
                    <div class="rows">
                        <div class="col-12 mb-4">
                            <span class="h5 d-block text-upp">Marque os tipos desejados:</span>
                            <div class="rows itens-check px-3">
                            <div><input type="checkbox" name="eh_cliente" {{ isset($contato->eh_cliente) && $contato->eh_cliente == 'S' ? 'checked' : '' }} class="form-control tipo" id="contato" value="S"> <label class="p-2 mr-1" for="contato"><i class="fas fa-user"></i> Contato</label>
                             </div>
                             <div><input type="checkbox" name="eh_fornecedor" {{ isset($contato->eh_fornecedor) && $contato->eh_fornecedor == 'S' ? 'checked' : '' }} class="form-control tipo" id="fornecedor" value="S"> <label class="p-2 mr-1" for="fornecedor"><i class="fas fa-cart-arrow-down"></i> Fornecedor</label>
                             </div>

                             <div><input type="checkbox" name="eh_transportador" {{ isset($contato->eh_transportador) && $contato->eh_transportador == 'S' ? 'checked' : '' }} class="form-control tipo" id="transportador" value="S"> <label class="p-2" for="transportador"><i class="fas fa-truck"></i> Transportador</label>
                             </div>
                             </div>
                        </div>

                    <div class="col-6 mb-3">
                            <label class="text-label">Nome</label>
                            <input type="text" name="nome" value="{{ isset($contato->nome) ? ($contato->nome) : old('nome') }}" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-6 mb-3">
                            <label class="text-label">Nome Fantasia</label>
                            <input type="text" name="nome_fantasia" value="{{ isset($contato->nome_fantasia) ? ($contato->nome_fantasia) : old('nome_fantasia') }}" class="form-campo">
                    </div>

                    <div class="col-4 mb-3">
                            <label class="text-label">CPF</label>
                            <input type="text" name="cpf" value="{{ isset($contato->cpf) ? ($contato->cpf) : old('cpf') }}" placeholder="Digite aqui..." class="form-campo">
                    </div>


                    <div class="col-4 mb-3">
                            <label class="text-label">CNPJ</label>
                            <input type="text" name="cnpj" value="{{ isset($contato->cnpj) ? ($contato->cnpj) : old('cnpj') }}" placeholder="Digite aqui..." class="form-campo">
                    </div>

                    <div class="col-4 mb-3">
                            <label class="text-label">Data Cadastro</label>
                            <input type="date" name="data_cadastro" value="{{ isset($contato->data_cadastro) ? ($contato->data_cadastro) : old('data_cadastro') }}" placeholder="Digite aqui..." class="form-campo">
                    </div>

                    <div class="col-8 mb-3">
                            <label class="text-label">E-mail</label>
                            <input type="text" name="email" value="{{ isset($contato->email) ? ($contato->email) : old('email') }}" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Senha</label>
                            <input type="password" name="senha" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>

                    <div class="col-1 mb-3">
                            <label class="text-label">DDD:</label>
                            <input type="text" name="ddd" value="{{ isset($contato->ddd) ? ($contato->ddd) : old('ddd') }}" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-3 mb-3">
                            <label class="text-label">Fone:</label>
                            <input type="text" name="fone" value="{{ isset($contato->fone) ? ($contato->fone) : old('fone') }}" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-3 mb-3">
                            <label class="text-label">Celular:</label>
                            <input type="text" name="celular" value="{{ isset($contato->celular) ? ($contato->celular) : old('celular') }}" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-2">
                        <label class="text-label">Ativo</label>
                        <select class="form-campo" name="ativo">
                                <option value="S" {{ $ativo=='S' ? 'selected' : '' }}>Sim</option>
                                <option value="N" {{ $ativo=='N' ? 'selected' : '' }}>Não</option>
                        </select>
                    </div>

                </div>
            </div>
          </div>

          <div id="tab-2">
            <div class="p-2">
            <span class="d-block mt-4 h4 border-bottom text-uppercase">Endereço</span>
            <div class="rows">
                <div class="col-6 mb-3">
                        <label class="text-label">Logradouro</label>
                        <input type="text" name="logradouro" id="logradouro" value="{{ isset($contato->logradouro) ? ($contato->logradouro) : old('logradouro') }}" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-3 mb-4">
                        <label class="text-label">Numero</label>
                        <input type="text" name="numero" id="numero" value="{{ isset($contato->numero) ? ($contato->numero) : old('numero') }}" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-3 mb-3">
                        <label class="text-label">Complemento</label>
                        <input type="text" name="complemento" id="complemento" value="{{ isset($contato->complemento) ? ($contato->complemento) : old('complemento') }}" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-6 mb-3">
                        <label class="text-label">Bairro</label>
                        <input type="text" name="bairro" id="bairro" value="{{ isset($contato->bairro) ? ($contato->bairro) : old('bairro') }}" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-3 mb-3">
                    <label class="text-label">CEP</label>
                     <div class="input-grupo">
                     <input type="text" value="{{ isset($contato->cep) ? ($contato->cep) : old('cep') }}" name="cep" id="cep" placeholder="Digite aqui..." class="form-campo">

                     </div>
                </div>
                <div class="col-3 mb-2">
                        <label class="text-label">UF</label>
                        <select class="form-campo" name="uf" id="uf">
                <option value="" selected="">Selecione o Estado</option>
                            <option value="AC" {{ $uf == 'AC' ? 'selected' : '' }}>Acre</option>
                            <option value="AL" {{ $uf == 'AL' ? 'selected' : '' }}>Alagoas</option>
                            <option value="AP" {{ $uf == 'AP' ? 'selected' : '' }}>Amapá</option>
                            <option value="AM" {{ $uf == 'AM' ? 'selected' : '' }}>Amazonas</option>
                            <option value="BA" {{ $uf == 'BA' ? 'selected' : '' }}>Bahia</option>
                            <option value="CE" {{ $uf == 'CE' ? 'selected' : '' }}>Ceará</option>
                            <option value="DF" {{ $uf == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                            <option value="ES" {{ $uf == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                            <option value="GO" {{ $uf == 'GO' ? 'selected' : '' }}>Goiás</option>
                            <option value="MA" {{ $uf == 'MA' ? 'selected' : '' }}>Maranhão</option>
                            <option value="MS" {{ $uf == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                            <option value="MT" {{ $uf == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                            <option value="MG" {{ $uf == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                            <option value="PR" {{ $uf == 'PR' ? 'selected' : '' }}>Paraná</option>
                            <option value="PB" {{ $uf == 'PB' ? 'selected' : '' }}>Paraíba</option>
                            <option value="PA" {{ $uf == 'PA' ? 'selected' : '' }}>Pará</option>
                            <option value="PE" {{ $uf == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                            <option value="PI" {{ $uf == 'PI' ? 'selected' : '' }}>Piauí</option>
                            <option value="RJ" {{ $uf == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                            <option value="RN" {{ $uf == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                            <option value="RS" {{ $uf == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                            <option value="RO" {{ $uf == 'RO' ? 'selected' : '' }}>Rondônia</option>
                            <option value="RR" {{ $uf == 'RR' ? 'selected' : '' }}>Roraima</option>
                            <option value="SC" {{ $uf == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                            <option value="SE" {{ $uf == 'SE' ? 'selected' : '' }}>Sergipe</option>
                            <option value="SP" {{ $uf == 'SP' ? 'selected' : '' }}>São Paulo</option>
                            <option value="TO" {{ $uf == 'TO' ? 'selected' : '' }}>Tocantins</option>
                        </select>
                </div>
                <div class="col-4 mb-2">
                        <label class="text-label">Cidade</label>
                        <input type="text" class="form-campo" value="{{ isset($contato->cidade) ? ($contato->cidade) : old('cidade') }}" name="cidade" id="cidade">

                </div>
                    </div>
            </div>
          </div>

            <div id="tab-3">
            <div class="p-2">
                <span class="d-block mt-4 h4 border-bottom text-uppercase">Informações Adicionais</span>
                <div class="rows">
                    <div class="col-4 mb-3">
                            <label class="text-label">Insc. Estadual</label>
                            <input type="text" name="ie" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Insc. Municipal</label>
                            <input type="text" name="im" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-4 mb-3">
                            <label class="text-label">Suframa</label>
                            <input type="text" name="suframa" value="" placeholder="Digite aqui..." class="form-campo">
                    </div>

                    <div class="col-4 mb-3">
                             <label class="text-label">RG</label>
                             <input type="text" name="rg" value="" placeholder="Digite aqui..." class="form-campo">
                     </div>
                     <div class="col-4 mb-3">
                             <label class="text-label">Cód. Estrangeiro</label>
                             <input type="text" name="cod_estrangeiro" value="" placeholder="Digite aqui..." class="form-campo">
                     </div>
                     <div class="col-4 mb-3">
                             <label class="text-label">IE Subst. Trib.</label>
                             <input type="text" name="ie_subt_trib" value="" placeholder="Digite aqui..." class="form-campo">
                     </div>

                     </div>
             </div>
             </div>
     </div>
            <div class="col-12 text-center pb-4">
                <input type="submit" value="Salvar" class="btn btn-laranja m-auto">
            </div>
          </div>
        </div>
    </form>
    </div>
@endsection
