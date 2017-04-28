<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Valores Examene'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tb Examenes'), ['controller' => 'TbExamenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tb Examene'), ['controller' => 'TbExamenes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbValoresExamenes index large-9 medium-8 columns content">
    <h3><?= __('Tb Valores Examenes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parametro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tb_examenes_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbValoresExamenes as $tbValoresExamene): ?>
            <tr>
                <td><?= $this->Number->format($tbValoresExamene->id) ?></td>
                <td><?= $this->Number->format($tbValoresExamene->valor) ?></td>
                <td><?= h($tbValoresExamene->parametro) ?></td>
                <td><?= $tbValoresExamene->has('tb_examene') ? $this->Html->link($tbValoresExamene->tb_examene->id, ['controller' => 'TbExamenes', 'action' => 'view', $tbValoresExamene->tb_examene->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbValoresExamene->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbValoresExamene->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbValoresExamene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbValoresExamene->id)]) ?>
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
