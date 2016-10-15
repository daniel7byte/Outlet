<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bolsa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cupones'), ['controller' => 'Cupones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cupone'), ['controller' => 'Cupones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bolsa index large-9 medium-8 columns content">
    <h3><?= __('Bolsa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cupon_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bolsa as $bolsa): ?>
            <tr>
                <td><?= $this->Number->format($bolsa->id) ?></td>
                <td><?= $bolsa->has('cupone') ? $this->Html->link($bolsa->cupone->id, ['controller' => 'Cupones', 'action' => 'view', $bolsa->cupone->id]) : '' ?></td>
                <td><?= $bolsa->has('usuario') ? $this->Html->link($bolsa->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $bolsa->usuario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bolsa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bolsa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bolsa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bolsa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
