<?php
/**
  * @var \App\View\AppView $this
  */
?>
<script type="text/javascript">
 window.onload=function() {

    $('#tabla_1 .Parametros').each(function()
    {
    var cadena = $(this).html();
    });

    // alert(document.getElementById("parametros").value);    
    alert(cadena);
    var arreglo = cadena.split(","); 
        for (var x=0; x<=arreglo.length; x++){ 
            //alert(arreglo.length);                  
        $('#addr'+x).html("<td>"+ (x) +"</td><td><input name='parametro"+x+"' type='text' placeholder='Parametro' class='form-control input-md'  />");
        $('#tab_logic').append('<tr id="addr'+(x + 1)+'"></tr>');
    }
    var indice = 0; 
    $('#tab_logic input[type=text]').each(function(){                       
            $(this).val(arreglo[indice]);
            indice++;
            });  
 }    
</script>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>        
    </ul>
</nav>
<div class="tbTiposExamenes view large-9 medium-8 columns content">
    <h3><?= h($tbTiposExamene->id) ?></h3>
    <table class="vertical-table" id="tabla_1">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td ><?= h($tbTiposExamene->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parametros') ?></th>
            <td id="Parametros"><?= h($tbTiposExamene->parametros) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbTiposExamene->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Variables') ?></th>
            <td><?= $this->Number->format($tbTiposExamene->cantidad_variables) ?></td>
        </tr>
    </table>
</div>
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
                    <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>    
    </div>
    <a id="add_row" class="btn btn-success pull-left">+</a>
    <a id='delete_row' class="pull-right btn btn-danger">-</a>
    </div> 
    <br>

