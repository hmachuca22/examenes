<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="tbExamenes index large-10 medium-8 columns content">
    <h3><?= __('Examenes') ?></h3>
<table class="table table-striped table-hover ">
  <thead>
       <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_ingreso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_relizado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tb_tipos_examenes_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
  </thead>
  <tbody>
            <?php foreach ($tbExamenes as $tbExamene): ?>
            <tr>
                <td><?= $this->Number->format($tbExamene->id) ?></td>
                <td><?= h($tbExamene->correo) ?></td>
                <td><?= h($tbExamene->fecha_ingreso) ?></td>
                <td><?= h($tbExamene->sexo) ?></td>
                <td><?= $this->Number->format($tbExamene->edad) ?></td>
                <td><?= h($tbExamene->fecha_relizado) ?></td>
                <td><?= $tbExamene->has('tb_tipos_examene') ? $this->Html->link($tbExamene->tb_tipos_examene->id, ['controller' => 'TbTiposExamenes', 'action' => 'view', $tbExamene->tb_tipos_examene->id]) : '' ?></td>
                <td class="actions">
                    <?php echo $this->html->link('Ver',['action'=>'view',$tbExamene->id],['class'=>'btn btn-primary btn-xs']);?>

                    <?php echo $this->html->link('Editar',['action'=>'edit',$tbExamene->id],['class'=>'btn btn-warning btn-xs']);?>

                    <?php echo $this->html->link('Borrar',['action'=>'delete',$tbExamene->id],['class'=>'btn btn-danger btn-xs'],['confirm' => __('Seguro que quiere borrar el registro # {0}?', $tbExamene->id)]);?>                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>   
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ulstimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} of {{pages}}, Mostrando {{current}} Registro(s) de {{count}} totales')]) ?></p>
    </div>
</div>





    