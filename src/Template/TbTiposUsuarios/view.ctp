<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Tipos Usuario'), ['action' => 'edit', $tbTiposUsuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Tipos Usuario'), ['action' => 'delete', $tbTiposUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbTiposUsuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Tipos Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Tipos Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbTiposUsuarios view large-9 medium-8 columns content">
    <h3><?= h($tbTiposUsuario->descripcion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($tbTiposUsuario->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbTiposUsuario->id) ?></td>
        </tr>
    </table>
</div>
