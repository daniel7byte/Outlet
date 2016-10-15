<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cupone'), ['action' => 'edit', $cupone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cupone'), ['action' => 'delete', $cupone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cupone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cupones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cupone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sucursales'), ['controller' => 'Sucursales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sucursale'), ['controller' => 'Sucursales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cupones view large-9 medium-8 columns content">
    <h3><?= h($cupone->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($cupone->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ciudad') ?></th>
            <td><?= h($cupone->ciudad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= h($cupone->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descuento') ?></th>
            <td><?= h($cupone->descuento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sucursale') ?></th>
            <td><?= $cupone->has('sucursale') ? $this->Html->link($cupone->sucursale->id, ['controller' => 'Sucursales', 'action' => 'view', $cupone->sucursale->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cupone->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FechaInicio') ?></th>
            <td><?= h($cupone->fechaInicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HoraInicio') ?></th>
            <td><?= h($cupone->horaInicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FechaTerminacion') ?></th>
            <td><?= h($cupone->fechaTerminacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HoraTerminacion') ?></th>
            <td><?= h($cupone->horaTerminacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cupone->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cupone->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Banner') ?></h4>
        <?= $this->Text->autoParagraph(h($cupone->banner)); ?>
    </div>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($cupone->descripcion)); ?>
    </div>
    <div class="row">
        <h4><?= __('Img1') ?></h4>
        <?= $this->Text->autoParagraph(h($cupone->img1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Img2') ?></h4>
        <?= $this->Text->autoParagraph(h($cupone->img2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Img3') ?></h4>
        <?= $this->Text->autoParagraph(h($cupone->img3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Img4') ?></h4>
        <?= $this->Text->autoParagraph(h($cupone->img4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Img5') ?></h4>
        <?= $this->Text->autoParagraph(h($cupone->img5)); ?>
    </div>
</div>
