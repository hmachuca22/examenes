<?php
/**
  * @var \App\View\AppView $this
  */
?>
<script type="text/javascript">
    $(document).ready(function(){    
    var i=1;
    $("#add_row").click(function(){
    $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='parametro"+i+"' type='text' placeholder='Parametro' class='form-control input-md'  />");

    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
    });    
    $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
    });

//Funcion encargada de Recoger los inputs dentro de la tabla_
    var form = document.getElementById("tbTiposExamenes");
    document.getElementById("enviar").addEventListener("click", function () {        
        var arrText= new Array();
            $('#tab_logic input[type=text]').each(function(){
            arrText.push($(this).val());
            });                    
        document.getElementById("parametros").value = arrText;
        //alert(parametro0.value); 
        });

 window.onload=function() {

    document.getElementById('parametros').style.visibility = 'hidden';
 }
});
</script>
<div class="tbTiposExamenes form large-3 medium-3 columns content"  onload="alerta()">
    <?= $this->Form->create($tbTiposExamene) ?>
    <fieldset>
        <legend><?= __('Agregar Tipos de Examen') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
            echo $this->Form->control('cantidad_variables');
            echo $this->Form->control('parametros');
        ?>
    <div class="container">
    <div class="row clearfix">
        <div class="col-md-6 column">
            <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Paramentro
                        </th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0'>
                        <td>
                        1
                        </td>
                        <td>
                        <input type="text" name='parametro0' id="parametro0" placeholder='Parametro' class="form-control"/>
                        </td>                        
                    </tr>
                    <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_row" class="btn btn-success pull-left">+</a>
    <a id='delete_row' class="pull-right btn btn-danger">-</a>
</div>
    </fieldset>    
    <br>    
    <button id="enviar" name="enviar"  class="btn btn-primary">
        Guardar
    </button>
<?= $this->Form->end() ?>
</div>

