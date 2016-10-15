<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sucursales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ciudades'), ['controller' => 'Ciudades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ciudade'), ['controller' => 'Ciudades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sucursales form large-9 medium-8 columns content">
    <?= $this->Form->create($sucursale) ?>
    <fieldset>
        <legend><?= __('Add Sucursale') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('direccion');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('lat');
            echo $this->Form->input('lng');
            echo $this->Form->input('empresa_id', ['options' => $empresas]);
            echo $this->Form->input('ciudad_id', ['options' => $ciudades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
