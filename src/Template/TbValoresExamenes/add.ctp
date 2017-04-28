<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Valores Examenes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tb Examenes'), ['controller' => 'TbExamenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tb Examene'), ['controller' => 'TbExamenes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbValoresExamenes form large-9 medium-8 columns content">
    <?= $this->Form->create($tbValoresExamene) ?>
    <fieldset>
        <legend><?= __('Add Tb Valores Examene') ?></legend>
        <?php
            echo $this->Form->control('valor');
            echo $this->Form->control('parametro');
            echo $this->Form->control('tb_examenes_id', ['options' => $tbExamenes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
