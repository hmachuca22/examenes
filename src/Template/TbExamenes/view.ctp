<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="tbExamenes view large-5 medium-8 columns content">
<div class="panel panel-default">
  <div class="panel-heading">Información de Examen</div>
  <div class="panel-body">
      <table class="table table-striped table-hover ">
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($tbExamene->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($tbExamene->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo de Examen') ?></th>
            <td><?= $tbExamene->has('tb_tipos_examene') ? $this->Html->link($tbExamene->tb_tipos_examene->id, ['controller' => 'TbTiposExamenes', 'action' => 'view', $tbExamene->tb_tipos_examene->id]) : '' ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= $this->Number->format($tbExamene->edad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Ingreso') ?></th>
            <td><?= h($tbExamene->fecha_ingreso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Relizado') ?></th>
            <td><?= h($tbExamene->fecha_relizado) ?></td>
        </tr>
    </table>
</div>
  </div>
</div>

<div class="t bExamenes view large-5 medium-8 columns content>  
  <div class="panel-footer">
      <div class="btn-group btn-group-justified">
  <a href="#" class="btn btn-default">Left</a>  
</div>
</div>



