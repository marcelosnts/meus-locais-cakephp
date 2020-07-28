<h1>Editar <?= $local->nome ?>:</h1>

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

<?= $this->Html->css('app') ?>
<?= $this->Html->script('jquery') ?>
<?= $this->Html->script('viacep_api') ?>
