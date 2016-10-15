<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cupones'), ['controller' => 'Cupones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cupone'), ['controller' => 'Cupones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorias view large-9 medium-8 columns content">
    <h3><?= h($categoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($categoria->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoria->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoria->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($categoria->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cupones') ?></h4>
        <?php if (!empty($categoria->cupones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Banner') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Ciudad') ?></th>
                <th scope="col"><?= __('Img1') ?></th>
                <th scope="col"><?= __('Img2') ?></th>
                <th scope="col"><?= __('Img3') ?></th>
                <th scope="col"><?= __('Img4') ?></th>
                <th scope="col"><?= __('Img5') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col"><?= __('Descuento') ?></th>
                <th scope="col"><?= __('FechaInicio') ?></th>
                <th scope="col"><?= __('HoraInicio') ?></th>
                <th scope="col"><?= __('FechaTerminacion') ?></th>
                <th scope="col"><?= __('HoraTerminacion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sucursal Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->cupones as $cupones): ?>
            <tr>
                <td><?= h($cupones->id) ?></td>
                <td><?= h($cupones->titulo) ?></td>
                <td><?= h($cupones->banner) ?></td>
                <td><?= h($cupones->descripcion) ?></td>
                <td><?= h($cupones->ciudad) ?></td>
                <td><?= h($cupones->img1) ?></td>
                <td><?= h($cupones->img2) ?></td>
                <td><?= h($cupones->img3) ?></td>
                <td><?= h($cupones->img4) ?></td>
                <td><?= h($cupones->img5) ?></td>
                <td><?= h($cupones->valor) ?></td>
                <td><?= h($cupones->descuento) ?></td>
                <td><?= h($cupones->fechaInicio) ?></td>
                <td><?= h($cupones->horaInicio) ?></td>
                <td><?= h($cupones->fechaTerminacion) ?></td>
                <td><?= h($cupones->horaTerminacion) ?></td>
                <td><?= h($cupones->created) ?></td>
                <td><?= h($cupones->modified) ?></td>
                <td><?= h($cupones->sucursal_id) ?></td>
                <td><?= h($cupones->categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cupones', 'action' => 'view', $cupones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cupones', 'action' => 'edit', $cupones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cupones', 'action' => 'delete', $cupones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cupones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Empresas') ?></h4>
        <?php if (!empty($categoria->empresas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nit') ?></th>
                <th scope="col"><?= __('RazonSocial') ?></th>
                <th scope="col"><?= __('RazonComercial') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->empresas as $empresas): ?>
            <tr>
                <td><?= h($empresas->id) ?></td>
                <td><?= h($empresas->nit) ?></td>
                <td><?= h($empresas->razonSocial) ?></td>
                <td><?= h($empresas->razonComercial) ?></td>
                <td><?= h($empresas->descripcion) ?></td>
                <td><?= h($empresas->created) ?></td>
                <td><?= h($empresas->modified) ?></td>
                <td><?= h($empresas->usuario_id) ?></td>
                <td><?= h($empresas->categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Empresas', 'action' => 'view', $empresas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Empresas', 'action' => 'edit', $empresas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empresas', 'action' => 'delete', $empresas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
