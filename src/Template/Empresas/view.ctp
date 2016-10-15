<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sucursales'), ['controller' => 'Sucursales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sucursale'), ['controller' => 'Sucursales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nit') ?></th>
            <td><?= h($empresa->nit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RazonSocial') ?></th>
            <td><?= h($empresa->razonSocial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RazonComercial') ?></th>
            <td><?= h($empresa->razonComercial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $empresa->has('usuario') ? $this->Html->link($empresa->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $empresa->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $empresa->has('categoria') ? $this->Html->link($empresa->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $empresa->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($empresa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($empresa->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($empresa->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sucursales') ?></h4>
        <?php if (!empty($empresa->sucursales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Lat') ?></th>
                <th scope="col"><?= __('Lng') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Ciudad Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->sucursales as $sucursales): ?>
            <tr>
                <td><?= h($sucursales->id) ?></td>
                <td><?= h($sucursales->titulo) ?></td>
                <td><?= h($sucursales->direccion) ?></td>
                <td><?= h($sucursales->descripcion) ?></td>
                <td><?= h($sucursales->lat) ?></td>
                <td><?= h($sucursales->lng) ?></td>
                <td><?= h($sucursales->created) ?></td>
                <td><?= h($sucursales->modified) ?></td>
                <td><?= h($sucursales->empresa_id) ?></td>
                <td><?= h($sucursales->ciudad_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sucursales', 'action' => 'view', $sucursales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sucursales', 'action' => 'edit', $sucursales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sucursales', 'action' => 'delete', $sucursales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
