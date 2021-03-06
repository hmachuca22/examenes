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
                ['action' => 'delete', $tbTiposUsuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbTiposUsuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Tipos Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbTiposUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($tbTiposUsuario) ?>
    <fieldset>
        <legend><?= __('Edit Tb Tipos Usuario') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
