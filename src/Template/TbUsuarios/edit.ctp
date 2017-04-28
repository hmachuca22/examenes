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
                ['action' => 'delete', $tbUsuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbUsuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tb Tipos Usuarios'), ['controller' => 'TbTiposUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tb Tipos Usuario'), ['controller' => 'TbTiposUsuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUsuario) ?>
    <fieldset>
        <legend><?= __('Edit Tb Usuario') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('tb_tipos_usuarios_id', ['options' => $tbTiposUsuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
