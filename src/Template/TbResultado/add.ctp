<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Resultado'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbResultado form large-9 medium-8 columns content">
    <?= $this->Form->create($tbResultado) ?>
    <fieldset>
        <legend><?= __('Add Tb Resultado') ?></legend>
        <?php
            echo $this->Form->control('diagnostico');
            echo $this->Form->control('id_tbexamenes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
