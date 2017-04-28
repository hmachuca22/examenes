<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Usuario'), ['action' => 'edit', $tbUsuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Usuario'), ['action' => 'delete', $tbUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUsuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tb Tipos Usuarios'), ['controller' => 'TbTiposUsuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Tipos Usuario'), ['controller' => 'TbTiposUsuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbUsuarios view large-9 medium-8 columns content">
    <h3><?= h($tbUsuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tbUsuario->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($tbUsuario->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tb Tipos Usuario') ?></th>
            <td><?= $tbUsuario->has('tb_tipos_usuario') ? $this->Html->link($tbUsuario->tb_tipos_usuario->descripcion, ['controller' => 'TbTiposUsuarios', 'action' => 'view', $tbUsuario->tb_tipos_usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbUsuario->id) ?></td>
        </tr>
    </table>
</div>
