@extends('template')

@section('conteudo')

<div class="col-9 central mb-3">
    <div class="card-body p-3">

                    <div class="rows">
                        <div class="col-6">
                            <div class="card">
                            <div class="p-2 bg-title text-light text-uppercase h4 mb-0 text-branco"><h5><i class="fas fa-chart-pie"></i> Gráfico de vendas no mês</h5></div>
                                <canvas class="my-4" id="myChart" width="400" height="250"></canvas>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                            <div class="p-2 bg-title text-light text-uppercase h4 mb-0 text-branco"><h5><i class="fas fa-chart-pie"></i> Gráfico de vendas no mês</h5></div>
                                <canvas class="my-4" id="myChart2" width="400" height="250"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="rows mt-4">
                        <div class="col-4 my-3">
                            <div class="card bg-title2">
                                <div class="card-body rows p-2">
                                    <div class="col-4 col-ms-12 text-center">
                                        <i class="fas fa-box-open font-4 text-branco h1 mb-0"></i>
                                    </div>
                                    <div class="col-md-8 col-ms-12">
                                        <span class="d-block text-dark">Entrada</span>
                                        <span class="h4 float-left text-dark"><strong>R$ 250.000,00</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="card bg-title2">
                                <div class="card-body rows p-2">
                                    <div class="col-4 col-ms-12 text-center">
                                        <i class="fas fa-external-link-square-alt font-4 text-branco h1 mb-0"></i>
                                    </div>
                                    <div class="col-md-8 col-ms-12">
                                        <span class="d-block text-dark">Saída</span>
                                        <span class="h4 float-left text-dark"><strong>R$ 250.000,00</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="card bg-title2">
                                <div class="card-body rows p-2">
                                    <div class="col-4 col-ms-12 text-center">
                                        <i class="fab fa-bitcoin font-4 text-branco h1 mb-0"></i>
                                    </div>
                                    <div class="col-md-8 col-ms-12">
                                        <span class="d-block text-dark">Despesas</span>
                                        <span class="h4 float-left text-dark"><strong>R$ 250.000,00</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rows mt-5">
                        <div class="col-4 mb-3">
                            <div class="card">
                            <div class="bg-title p-2 h4 text-branco text-uppercase text-center">
                                <h5><i class="fas fa-box-open"></i> Pedidos pendentes</h5>
                            </div>
                                <div class="card-body p-1">
                                    <div class="table-responsive">
                                        <table cellpadding="0" cellspacing="0" class="table table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th align="left">Data</th>
                                                    <th align="left">Produto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                            <div class="bg-title p-2 h4 text-branco text-uppercase text-center">
                                <h5><i class="fas fa-box-open"></i> Pedidos finalizados</h5>
                            </div>
                                <div class="card-body p-1">
                                    <div class="table-responsive">
                                        <table cellpadding="0" cellspacing="0" class="table table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th align="left">Data</th>
                                                    <th align="left">Produto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                            <div class="bg-title p-2 h4 text-branco text-uppercase text-center">
                                <h5><i class="fas fa-box-open"></i> Pedidos alterados</h5>
                            </div>
                                <div class="card-body p-1">
                                    <div class="table-responsive">
                                        <table cellpadding="0" cellspacing="0" class="table table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th align="left">Data</th>
                                                    <th align="left">Produto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                                <tr>
                                                    <td align="left">19/05/17</td>
                                                    <td align="left">Panela cabo grande...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                    </div>


                    </div>
            </div>
        </div>
    </div>

@endsection
