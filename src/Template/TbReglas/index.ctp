<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Regla'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tb Tipos Examenes'), ['controller' => 'TbTiposExamenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tb Tipos Examene'), ['controller' => 'TbTiposExamenes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbReglas index large-9 medium-8 columns content">
    <h3><?= __('Tb Reglas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tb_tipos_examenes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_inferior') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_superior') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diagnostico1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diagnostico2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diagnostico3') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbReglas as $tbRegla): ?>
            <tr>
                <td><?= $this->Number->format($tbRegla->id) ?></td>
                <td><?= $tbRegla->has('tb_tipos_examene') ? $this->Html->link($tbRegla->tb_tipos_examene->id, ['controller' => 'TbTiposExamenes', 'action' => 'view', $tbRegla->tb_tipos_examene->id]) : '' ?></td>
                <td><?= $this->Number->format($tbRegla->valor_inferior) ?></td>
                <td><?= $this->Number->format($tbRegla->valor_superior) ?></td>
                <td><?= h($tbRegla->diagnostico1) ?></td>
                <td><?= h($tbRegla->diagnostico2) ?></td>
                <td><?= h($tbRegla->diagnostico3) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbRegla->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbRegla->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbRegla->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbRegla->id)]) ?>
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
