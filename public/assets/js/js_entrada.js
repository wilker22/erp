$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': _token
    }
});



$(function () {
    $("#btnInserirEntrada").on('click', function () {
        var id = $("#id_produto").val();
        var preco = $("#preco").val();
        var qtde = $("#qtde").val();
        var localizacao_id = $("#localizacao_id").val();

        $.ajax({
            url: base_url + 'entrada',
            type: 'POST',
            dataType: 'json',
            data: {
                produto_id: id,
                qtde_entrada: qtde,
                valor_entrada: preco,
                localizacao_id: localizacao_id,
                subtotal_entrada: qtde * preco

            },
            success: function (data) {
                lista_entradas(data);
                limpar_entradas();
            }
        })
    });
});



$(function () {
    $('#produto').on('keyup', function () {
        var q = $(this).val()

        if (q == "") {
            return
        }

        $.ajax({
            url: base_url + 'produto/pesquisa',
            type: 'GET',
            dataType: 'json',
            data: { q: q },
            success: function (data) {
                $('#produto').after('<div class="listaProdutos"></div>')
                html = "";
                for (var i in data) {
                    html += '<div class="si"><a href="javascript:;" onclick="selecionarProduto(this)"' +
                        'data-id        = "' + data[i].id +
                        '" data-preco   = "' + data[i].preco +
                        '" data-nome    = "' + data[i].produto + '">' +
                        data[i].produto + " -  R$ " + data[i].preco + '</a></div>';

                }

                $(".listaProdutos").html(html);
                $(".listaProdutos").show();

            }
        });
    });

});

function lista_localizacao(id_produto) {
    $.ajax({
        url: base_url + 'produtolocalizacao/listaPorProduto/' + id_produto,
        type: 'GET',
        dataType: 'json',
        data: {},
        success: function (data) {
            html = "";
            for (i = 0; i < data.length; i++) {
                html += "<option value='" + data[i].id + "'>" + data[i].localizacao + "</option>";
            }

            $("#localizacao_id").html(html);

        }
    });
}

function selecionarProduto(obj) {
    var id = $(obj).attr('data-id');
    var nome = $(obj).attr('data-nome');
    var preco = $(obj).attr('data-preco');
    $(".listaProdutos").hide();

    $("#id_produto").val(id);
    $("#produto").val(nome);
    $("#preco").val(preco);
    $("#qtde").val(1);
    $("#qtde").focus();

    lista_localizacao(id)
}

function lista_entradas(data) {
    html = "<tr>";
    var total_entrada = 0.00;
    for (var i in data) {
        total_entrada += parseFloat(data[i].subtotal_entrada);
        html += '<td align="center">' + data[i].id + '</td>' +
            '<td align="center">' + data[i].data_entrada + '</td>' +
            '<td align="center">' + data[i].produto + '</td>' +
            '<td align="center">' + data[i].localizacao + '</td>' +
            '<td align="center">' + data[i].qtde_entrada + '</td>' +
            '<td align="center">' + data[i].valor_entrada + '</td>' +
            '<td align="center">' + data[i].subtotal_entrada + '</td></tr>'
    }
    total = total_entrada.toFixed(2).replace(".", ",");
    html += '<tr><td align="right" colspan="7"><b>Total:</b> <span class="text-verde minimo-fonte" id="total_entrada"> R$' + total + '</span></td></tr>'
    $("#lista_entradas").html(html);
}

function limpar_entradas() {
    $("#id_produto").val("");
    $("#produto").val("");
    $("#preco").val("");
    $("#qtde").val(1);
    $("#produto").focus();
}
