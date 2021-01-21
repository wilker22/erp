$(function () {
    $('#produto').on('keyup', function(){
        var q = $(this).val()
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
    })


});

