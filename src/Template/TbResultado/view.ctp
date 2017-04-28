<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Resultado'), ['action' => 'edit', $tbResultado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Resultado'), ['action' => 'delete', $tbResultado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbResultado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Resultado'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Resultado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbResultado view large-9 medium-8 columns content">
    <h3><?= h($tbResultado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Diagnostico') ?></th>
            <td><?= h($tbResultado->diagnostico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbResultado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Tbexamenes') ?></th>
            <td><?= $this->Number->format($tbResultado->id_tbexamenes) ?></td>
        </tr>
    </table>
</div>
