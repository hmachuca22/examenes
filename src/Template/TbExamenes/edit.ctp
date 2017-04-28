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
                ['action' => 'delete', $tbExamene->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbExamene->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Examenes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tb Tipos Examenes'), ['controller' => 'TbTiposExamenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tb Tipos Examene'), ['controller' => 'TbTiposExamenes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbExamenes form large-9 medium-8 columns content">
    <?= $this->Form->create($tbExamene) ?>
    <fieldset>
        <legend><?= __('Edit Tb Examene') ?></legend>
        <?php
            echo $this->Form->control('correo');
            echo $this->Form->control('fecha_ingreso');
            echo $this->Form->control('sexo');
            echo $this->Form->control('edad');
            echo $this->Form->control('fecha_relizado', ['empty' => true]);
            echo $this->Form->control('tb_tipos_examenes_id', ['options' => $tbTiposExamenes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
