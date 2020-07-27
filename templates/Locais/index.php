<h1>Meus Locais</h1>

<?= $this->Html->link('Adicionar novo local', ['action' => 'add']) ?>

<table>
    <tr>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($locais as $local): ?>
    <tr>
        <td>
            <?= $this->Html->link($local->nome, ['action' => 'view', $local->id]) ?>
        </td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $local->id]) ?>
            |
            <?=
                $this->Form->postLink('Deletar',
                    ['action' => 'delete', $local->id],
                    ['confirm' => 'Esta ação é irreversivel. Gostaria de prosseguir?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
