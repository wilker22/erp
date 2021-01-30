<div class="col menu-lateral position-relative">

    <nav class="menuprincipal" id="principal">
                        <ul class="menu-ul icones">
                            <li><a href="index.php?link=1"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="#menu_cadastro"><i class="icon fas fa-file"></i> Cadastro <span>+</span></a></li>
                            <li><a href="#menu_compras"><i class="icon fas fa-cart-plus"></i> Compras <span>+</span></a></li>
                            <li><a href="#menu_estoque"><i class="icon fas fa-cubes"></i> Estoque <span>+</span></a></li>
                            <li><a href="#menu_producao"><i class="fas fa-tools"></i> Produção <span>+</span></a></li>
                            <li><a href="#menu_financeiro"><i class="icon fas fa-hand-holding-usd"></i> Financeiro/contábil <span>+</span></a></li>
                        </ul>
    </nav>

    <!-- MENU CADASTRO -->
    <nav class="menuprincipal" id="menu_cadastro">
        <ul class="menu-lista">
            <li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
            <h1 class="tt px-2"><b><i class="far fa-fw fa-file"></i> Cadastros</b></h1>
                <div id="accordion" >
                      <h3>Categoria</h3>
                        <ul>
                            <li><a href="{{ route('categoria.index') }}">Lista todos</a></li>
                            <li><a href="{{ route('categoria.create') }}"> Cadastrar novo</a></li>
                        </ul>
                      <h3>Unidade</h3>
                        <ul>
                            <li><a href="{{ route('unidade.index') }}">Lista todos</a></li>
                            <li><a href="{{ route('unidade.create') }}"> Cadastrar novo</a></li>
                        </ul>
                      <h3>Produto</h3>
                        <ul>
                            <li><a href="{{ route('produto.index') }}">Lista todos</a></li>
                            <li><a href="{{ route('produto.create') }}"> Cadastrar novo</a></li>
                        </ul>
                      <h3>Estado</h3>
                      <ul>
                            <li><a href="index.php?link=8">Lista todos</a></li>
                      </ul>
                      <h3>Contato</h3>
                        <ul>
                            <li><a href="{{ route('contato.index') }}">Lista todos</a></li>
                            <li><a href="{{ route('contato.create') }}"> Cadastrar novo</a></li>
                        </ul>
                      <h3>Usuário</h3>
                        <ul>
                            <li><a href="index.php?link=12">Lista</a></li>
                            <li><a href="index.php?link=14"> Tabela</a></li>
                            <li><a href="index.php?link=16"> Ações</a></li>
                        </ul>
                      <h3>Diversos</h3>
                      <ul>
                            <li><a href="{{ route('tipomovimento.index') }}">Tipo de movimento </a></li>
                            <li><a href="lst-categoria.html">Status entrega </a></li>
                            <li><a href="lst-categoria.html">Status cotação </a></li>
                            <li><a href="lst-categoria.html">Status item cotação </a></li>
                            <li><a href="lst-categoria.html">Status ordem de compra </a></li>
                            <li><a href="lst-categoria.html">Status ordem de produção </a></li>
                            <li><a href="lst-categoria.html">Status pedidos</a></li>
                      </ul>
                </div>
        </ul>
    </nav>


    <!-- MENU COMPRAS -->
    <nav class="menuprincipal" id="menu_compras">
        <ul class="menu-lista">
            <li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
            <h1 class="tt px-2"><b><i class="fas fa-cart-plus"></i> Compras</b></h1>
            <li><a href="{{ route('solicitacao.index') }}"> Solicitação</a></li>
            <li><a href="{{ route('cotacao.index') }}"> Cotação</a></li>
            <li><a href="{{ route('ordemcompra.index') }}"> Ordem de compra</a></li>
        </ul>
    </nav>

    <!-- MENU ESTOQUE -->
    <nav class="menuprincipal" id="menu_estoque">
        <ul class="menu-lista">
            <li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
            <h1 class="tt px-2"><b><i class="fas fa-cubes"></i> Estoque</b></h1>
            <li><a href="{{ route('entrada.index') }}">Entradas avulsas</a></li>

            <small><b>Saídas</b></small>
            <li><a href="{{ route('saida.index')}}">Saídas</a></li>

            <small><b>Movimentações</b></small>
            <li><a href="{{ route('localizacao.index') }}">Localização</a></li>
            <li><a href="{{ route('produtolocalizacao.index') }}">Produto/Localização</a></li>
            <li><a href="{{ route('movimento.index') }}">Historico de movimento</a></li>
            <li><a href="index.php?link=26">Extrado produto</a></li>

        </ul>
    </nav>

    <!-- MENU PRODUÇÃO -->
    <nav class="menuprincipal" id="menu_producao">
        <ul class="menu-lista">
            <li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
            <h1 class="tt px-2"><b><i class="fas fa-cubes"></i> Produções</b></h1>

            <li><a href="index.php?link=23">Insumos</a></li>
            <li><a href="index.php?link=24">Ordem de produção</a></li>

        </ul>
    </nav>

    <!-- MENU FANACEIRO CONTABIL -->
    <nav class="menuprincipal" id="menu_financeiro">
        <ul class="menu-lista">
            <li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
            <h1 class="tt px-2"><b><i class="fas fa-hand-holding-usd"></i> Financeiro</b></h1>

            <small><b>Financeiro</b></small>
            <li><a href="index.php?link=27" class="nav-link text-light"> Ordem de compra</a></li>
            <li><a href="index.php?link=28" class="nav-link text-light"> Pedidos</a></li>
            <li><a href="index.php?link=29" class="nav-link text-light"> Contas a receber</a></li>
            <li><a href="index.php?link=30" class="nav-link text-light"> Contas a pagar</a></li>
            <li><a href="lst-despesas.html" class="nav-link text-light"> Despesas</a></li>

            <small><b>Contábil</b></small>
            <li><a href="pedido-loja.html" class="nav-link text-light"> Plano de contas</a>	</li>
            <li><a href="pedido-loja.html" class="nav-link text-light"> Fluxo de caixas</a></li>
            <li><a href="pedido-loja.html" class="nav-link text-light"> livro diário</a></li>
        </ul>
    </nav>

    <div class=" d-none">



        <h1 class="tt"><b><i class="fas fa-cubes"></i> Estoque</b></h1>
        <ul class="alt">
            <small><b>Entradas</b></small>


        </ul>

        <h1 class="tt"><b><i class="fas fa-hand-holding-usd"></i>  FINANCEIRO/CONTÁBIL</b></h1>
        <ul class="alt">


        </ul>
        </div>
    </div>
