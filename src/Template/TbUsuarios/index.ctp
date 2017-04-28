<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tbUsuarios index large-9 medium-8 columns content">
    <h3><?= __('Tb Usuarios') ?></h3>






    <table class="table table-striped table-hover ">
  <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tb_tipos_usuarios_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
   </thead>
  <tbody>
   <?php foreach ($tbUsuarios as $tbUsuario): ?>
            <tr>
                <td><?= $this->Number->format($tbUsuario->id) ?></td>
                <td><?= h($tbUsuario->nombre) ?></td>
                <td><?= h($tbUsuario->apellido) ?></td>
                <td><?= $tbUsuario->has('tb_tipos_usuario') ? $this->Html->link($tbUsuario->tb_tipos_usuario->descripcion, ['controller' => 'TbTiposUsuarios', 'action' => 'view', $tbUsuario->tb_tipos_usuario->id]) : '' ?></td>
                <td class="actions">
                    <?php echo $this->html->link('Ver',['action'=>'view',$tbUsuario->id],['class'=>'btn btn-primary btn-xs']);?>

                    <?php echo $this->html->link('Editar',['action'=>'edit',$tbUsuario->id],['class'=>'btn btn-warning btn-xs']);?>

                    <?php echo $this->html->link('Borrar',['action'=>'delete',$tbUsuario->id],['class'=>'btn btn-danger btn-xs'],['confirm' => __('Seguro que quiere borrar el registro # {0}?', $tbUsuario->id)]);?>                    
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


