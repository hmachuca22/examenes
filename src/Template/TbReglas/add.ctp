<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="tbReglas form large-9 medium-8 columns content">
    <?= $this->Form->create($tbRegla) ?>
    <fieldset>
        <legend><?= __('Agregar Reglas') ?></legend>
        <?php
            echo $this->Form->control('tb_tipos_examenes_id', ['options' => $tbTiposExamenes]);
            echo $this->Form->control('valor_inferior');
            echo $this->Form->control('valor_superior');
            echo $this->Form->control('diagnostico1');
            echo $this->Form->control('diagnostico2');
            echo $this->Form->control('diagnostico3');
        ?>
    </fieldset>
    <div id="resultado"></div>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
