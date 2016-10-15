<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cupones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sucursales'), ['controller' => 'Sucursales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursale'), ['controller' => 'Sucursales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cupones form large-9 medium-8 columns content">
    <?= $this->Form->create($cupone) ?>
    <fieldset>
        <legend><?= __('Add Cupone') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('banner');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('ciudad');
            echo $this->Form->input('img1');
            echo $this->Form->input('img2');
            echo $this->Form->input('img3');
            echo $this->Form->input('img4');
            echo $this->Form->input('img5');
            echo $this->Form->input('valor');
            echo $this->Form->input('descuento');
            echo $this->Form->input('fechaInicio');
            echo $this->Form->input('horaInicio');
            echo $this->Form->input('fechaTerminacion');
            echo $this->Form->input('horaTerminacion');
            echo $this->Form->input('sucursal_id', ['options' => $sucursales]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
