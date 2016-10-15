<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cupone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursales'), ['controller' => 'Sucursales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursale'), ['controller' => 'Sucursales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cupones index large-9 medium-8 columns content">
    <h3><?= __('Cupones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descuento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaInicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horaInicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaTerminacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horaTerminacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sucursal_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cupones as $cupone): ?>
            <tr>
                <td><?= $this->Number->format($cupone->id) ?></td>
                <td><?= h($cupone->titulo) ?></td>
                <td><?= h($cupone->ciudad) ?></td>
                <td><?= h($cupone->valor) ?></td>
                <td><?= h($cupone->descuento) ?></td>
                <td><?= h($cupone->fechaInicio) ?></td>
                <td><?= h($cupone->horaInicio) ?></td>
                <td><?= h($cupone->fechaTerminacion) ?></td>
                <td><?= h($cupone->horaTerminacion) ?></td>
                <td><?= h($cupone->created) ?></td>
                <td><?= h($cupone->modified) ?></td>
                <td><?= $cupone->has('sucursale') ? $this->Html->link($cupone->sucursale->id, ['controller' => 'Sucursales', 'action' => 'view', $cupone->sucursale->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cupone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cupone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cupone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cupone->id)]) ?>
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
