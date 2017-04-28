<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbRegla->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbRegla->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Reglas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tb Tipos Examenes'), ['controller' => 'TbTiposExamenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tb Tipos Examene'), ['controller' => 'TbTiposExamenes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbReglas form large-9 medium-8 columns content">
    <?= $this->Form->create($tbRegla) ?>
    <fieldset>
        <legend><?= __('Edit Tb Regla') ?></legend>
        <?php
            echo $this->Form->control('tb_tipos_examenes_id', ['options' => $tbTiposExamenes]);
            echo $this->Form->control('valor_inferior');
            echo $this->Form->control('valor_superior');
            echo $this->Form->control('diagnostico1');
            echo $this->Form->control('diagnostico2');
            echo $this->Form->control('diagnostico3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
