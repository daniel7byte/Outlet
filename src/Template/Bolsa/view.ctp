<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bolsa'), ['action' => 'edit', $bolsa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bolsa'), ['action' => 'delete', $bolsa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bolsa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bolsa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bolsa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cupones'), ['controller' => 'Cupones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cupone'), ['controller' => 'Cupones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bolsa view large-9 medium-8 columns content">
    <h3><?= h($bolsa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cupone') ?></th>
            <td><?= $bolsa->has('cupone') ? $this->Html->link($bolsa->cupone->id, ['controller' => 'Cupones', 'action' => 'view', $bolsa->cupone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $bolsa->has('usuario') ? $this->Html->link($bolsa->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $bolsa->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bolsa->id) ?></td>
        </tr>
    </table>
</div>
