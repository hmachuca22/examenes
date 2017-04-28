<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="tbUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUsuario) ?>
    <fieldset>
        <legend><?= __('Agregegar uario') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('tb_tipos_usuarios_id', ['options' => $tbTiposUsuarios]);
        ?>
    </fieldset>
     <button id="enviar"  class="btn btn-primary" >
        Guardar
    </button>
    <?= $this->Html->link(__('Menu Principal'), ['controller' => 'TbExamenes','action' => 'add'],['class'=>'btn btn-succes'])?>
    <?= $this->Form->end() ?>
</div>
