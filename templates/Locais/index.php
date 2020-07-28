<h1>Meus Locais</h1>

<?= $this->Html->link('Adicionar novo local', ['action' => 'add']) ?>

<table>
    <tr>
        <th><?= $this->Paginator->sort('nome', 'Local'); ?></th>
        <th><?= $this->Paginator->sort('data', 'Data da visita'); ?></th>
        <th>Ações</th>
    </tr>

    <?php foreach ($locais as $local): ?>
    <tr class=<?= $local->uf == 'MG' ? 'MG' : '' ?>>
        <td>
            <?= $local->nome ?>
        </td>
        <td>
            <?= $local->data ?>
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
<br>
<?= $this->Paginator->numbers(); ?>

<?= $this->Html->css('app') ?>
