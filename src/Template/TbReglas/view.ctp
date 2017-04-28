<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Regla'), ['action' => 'edit', $tbRegla->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Regla'), ['action' => 'delete', $tbRegla->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbRegla->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Reglas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Regla'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tb Tipos Examenes'), ['controller' => 'TbTiposExamenes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Tipos Examene'), ['controller' => 'TbTiposExamenes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbReglas view large-9 medium-8 columns content">
    <h3><?= h($tbRegla->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tb Tipos Examene') ?></th>
            <td><?= $tbRegla->has('tb_tipos_examene') ? $this->Html->link($tbRegla->tb_tipos_examene->id, ['controller' => 'TbTiposExamenes', 'action' => 'view', $tbRegla->tb_tipos_examene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diagnostico1') ?></th>
            <td><?= h($tbRegla->diagnostico1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diagnostico2') ?></th>
            <td><?= h($tbRegla->diagnostico2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diagnostico3') ?></th>
            <td><?= h($tbRegla->diagnostico3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbRegla->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Inferior') ?></th>
            <td><?= $this->Number->format($tbRegla->valor_inferior) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Superior') ?></th>
            <td><?= $this->Number->format($tbRegla->valor_superior) ?></td>
        </tr>
    </table>
</div>
