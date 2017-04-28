<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="tbExamenes form large-9 medium-8 columns content">
    <?= $this->Form->create($tbExamene) ?>
    <fieldset>
        <legend><?= __('Ingresar Examen') ?></legend>
        <?php
           $Sexo = array('F' =>'Femenino','M' =>'Masculino' );
            echo $this->Form->control('correo');
            echo $this->Form->control('fecha_ingreso');
            echo $this->Form->control('sexo',['options' => $Sexo]);
            echo $this->Form->control('edad');
            echo $this->Form->control('fecha_relizado', ['empty' => true]);
            echo $this->Form->control('tb_tipos_examenes_id', ['options' => $tbTiposExamenes]);
        ?>
    </fieldset>
     <button id="enviar"  class="btn btn-primary" >
        Guardar
    </button>    
    <?= $this->Form->end() ?>
</div>
