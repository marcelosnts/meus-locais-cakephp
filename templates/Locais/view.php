<h1><?= h($local->nome) ?></h1>
<p><?= h($local->data) ?></p>

<p><?= $this->Html->link('Edit', ['action' => 'edit', $local->id]) ?></p>
