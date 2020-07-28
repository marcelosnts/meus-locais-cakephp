$('#cep').change(() => {
        var cep = $('#cep').val();

        if (cep.length === 8){
            var url = `https://viacep.com.br/ws/${cep}/json/`;

            $.getJSON(url)
            .done(response => {
                var {logradouro, complemento, bairro, uf, localidade} = response;

                $('#logradouro').val(logradouro);
                $('#complemento').val(complemento);
                $('#bairro').val(bairro);
                $('#uf').val(uf);
                $('#cidade').val(localidade);
                $('#numero').val('');
            })
        }
    })
