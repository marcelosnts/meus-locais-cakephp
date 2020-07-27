<h1>Adicionar novo local:</h1>

<?php
    echo $this->Form->create($local);

    echo $this->Form->control('nome');
    echo $this->Form->control('cep');
    echo $this->Form->control('logradouro');
    echo $this->Form->control('complemento');
    echo $this->Form->control('numero');
    echo $this->Form->control('bairro');
    echo $this->Form->control('uf');
    echo $this->Form->control('cidade');
    echo $this->Form->control('data');

    echo $this->Form->button(__('Salvar local'));
    echo $this->Form->end();
?>

<?= $this->Html->script('jquery') ?>

<script>
    $('#cep').change(() => {
        var cep = $('#cep').val();

        if (cep.length === 8){
            var url = `https://viacep.com.br/ws/${cep}/json/`;

            $.getJSON(url)
            .done(response => {
                $('#logradouro').val(response.logradouro);
                $('#complemento').val(response.complemento);
                $('#bairro').val(response.bairro);
                $('#uf').val(response.uf);
                $('#cidade').val(response.localidade);
                console.log(response);
            })
        }
    })
</script>
