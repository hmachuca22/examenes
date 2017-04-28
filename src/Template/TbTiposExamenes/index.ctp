<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="tbTiposExamenes index large-9 medium-8 columns content">
    <h3><?= __('Tipos de Examen') ?></h3>


    <table class="table table-striped table-hover ">
  <thead>
     <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_variables') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parametros') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
    </tr>
  </thead>
  <tbody>
   <?php foreach ($tbTiposExamenes as $tbTiposExamene): ?>
            <tr>
                <td><?= $this->Number->format($tbTiposExamene->id) ?></td>
                <td><?= h($tbTiposExamene->descripcion) ?></td>
                <td><?= $this->Number->format($tbTiposExamene->cantidad_variables) ?></td>
                <td><?= h($tbTiposExamene->parametros) ?></td>
                <td class="actions">
                    <?php echo $this->html->link('Ver',['action'=>'view',$tbTiposExamene->id],['class'=>'btn btn-primary btn-xs']);?>

                    <?php echo $this->html->link('Editar',['action'=>'edit',$tbTiposExamene->id],['class'=>'btn btn-warning btn-xs']);?>

                    <?php echo $this->html->link('Borrar',['action'=>'delete',$tbTiposExamene->id],['class'=>'btn btn-danger btn-xs'],['confirm' => __('Seguro que quiere borrar el registro # {0}?', $tbTiposExamene->id)]);?>                    
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
