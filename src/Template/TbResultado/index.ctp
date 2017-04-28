<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Resultado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbResultado index large-9 medium-8 columns content">
    <h3><?= __('Tb Resultado') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diagnostico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tbexamenes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbResultado as $tbResultado): ?>
            <tr>
                <td><?= $this->Number->format($tbResultado->id) ?></td>
                <td><?= h($tbResultado->diagnostico) ?></td>
                <td><?= $this->Number->format($tbResultado->id_tbexamenes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbResultado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbResultado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbResultado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbResultado->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
