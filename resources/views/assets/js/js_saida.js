$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': _token
    }
});



$(function () {
    $("#btnInserirSaida").on('click', function(){
        var id = $("#id_produto").val();
        var preco = $("#preco").val();
        var qtde = $("#qtde").val();
        var localizacao_id = $("#localizacao_id").val();

        $.ajax({
            url: base_url + 'saida',
            type: 'POST',
            dataType: 'json',
            data: {
                produto_id: id,
                qtde_saida: qtde,
                valor_saida: preco,
                localizacao_id: localizacao_id,
                subtotal_saida: qtde * preco

            },
            success: function(data){
                lista_saidas(data);
                limpar_saidas();
            }
        })
    });
});



$(function () {
    $('#produto').on('keyup', function(){
        var q = $(this).val()

        if(q == ""){
            return
        }

        $.ajax({
            url: base_url + 'produto/pesquisa',
            type: 'GET',
            dataType: 'json',
            data: {q: q},
            success: function(data){
                $('#produto').after('<div class="listaProdutos"></div>')
                html ="";
                for(var i in data){
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

function lista_localizacao(id_produto){
    $.ajax({
       url: base_url + 'produtolocalizacao/listaPorProduto/' + id_produto,
        type: 'GET',
        dataType: 'json',
        data: {},
        success: function(data){
            html ="";
            for(i=0; i < data.length; i++){
                html += "<option value='" + data[i].id + "'>" + data[i].localizacao + "</option>";
            }

            $("#localizacao_id").html(html);

        }
    });
}

function selecionarProduto(obj){
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

function lista_saidas(data){
    html = "<tr>";
    var total_saida = 0.00;
    for(var i in data){
        total_saida += parseFloat(data[i].subtotal_saida);
        html += '<td align="center">' + data[i].id + '</td>' +
                '<td align="center">' + data[i].data_saida + '</td>' +
                '<td align="center">' + data[i].produto + '</td>' +
                '<td align="center">' + data[i].localizacao + '</td>' +
                '<td align="center">' + data[i].qtde_saida + '</td>' +
                '<td align="center">' + data[i].valor_saida + '</td>' +
                '<td align="center">' + data[i].subtotal_saida + '</td></tr>'
    }
    total = total_saida.toFixed(2).replace(".",",");
    html += '<tr><td align="right" colspan="7"><b>Total:</b> <span class="text-verde minimo-fonte" id="total_saida"> R$' + total + '</span></td></tr>'
    $("#lista_saidas").html(html);
}

function limpar_saidas(){
    $("#id_produto").val("");
    $("#produto").val("");
    $("#preco").val("");
    $("#qtde").val(1);
    $("#produto").focus();
}
