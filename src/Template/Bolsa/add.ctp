<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bolsa'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cupones'), ['controller' => 'Cupones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cupone'), ['controller' => 'Cupones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bolsa form large-9 medium-8 columns content">
    <?= $this->Form->create($bolsa) ?>
    <fieldset>
        <legend><?= __('Add Bolsa') ?></legend>
        <?php
            echo $this->Form->input('cupon_id', ['options' => $cupones]);
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
