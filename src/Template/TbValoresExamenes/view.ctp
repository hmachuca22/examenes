<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Valores Examene'), ['action' => 'edit', $tbValoresExamene->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Valores Examene'), ['action' => 'delete', $tbValoresExamene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbValoresExamene->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Valores Examenes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Valores Examene'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tb Examenes'), ['controller' => 'TbExamenes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Examene'), ['controller' => 'TbExamenes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbValoresExamenes view large-9 medium-8 columns content">
    <h3><?= h($tbValoresExamene->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parametro') ?></th>
            <td><?= h($tbValoresExamene->parametro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tb Examene') ?></th>
            <td><?= $tbValoresExamene->has('tb_examene') ? $this->Html->link($tbValoresExamene->tb_examene->id, ['controller' => 'TbExamenes', 'action' => 'view', $tbValoresExamene->tb_examene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbValoresExamene->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($tbValoresExamene->valor) ?></td>
        </tr>
    </table>
</div>
