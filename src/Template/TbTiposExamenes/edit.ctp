<?php
/**
  * @var \App\View\AppView $this
  */
?>
<script type="text/javascript">
    $(document).ready(function(){    
    $("#add_row").click(function(){
    //hacemos un conteo de la cantidad de registros dentro de la tabla.
    var cantidad = 0;
     $('#tab_logic input[type=text]').each(function(){
            cantidad++;
            });    
    // esto permitira a la tabla seguir creciendo.    
    var i = cantidad;
    $('#addr'+(i+1)).html("<td>"+ (i+1) +"</td><td><input name='parametro"+(i)+"' type='text' placeholder='Parametro' class='form-control input-md'  />");

    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
    });    
    $("#delete_row").click(function(){
        var cantidad = 0;
        $('#tab_logic input[type=text]').each(function(){
            cantidad++;
            });    
    // esto permitira a la tabla seguir creciendo.    
    var i = cantidad;    
         if(i>1){
         $("#addr"+(i)).html('');
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
        });

 window.onload=function() {
    // alert(document.getElementById("parametros").value);    
    var cadena = document.getElementById("parametros").value;     
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
});
</script>
<div class="tbTiposExamenes form large-9 medium-8 columns content">
    <?= $this->Form->create($tbTiposExamene) ?>
    <fieldset>
        <legend><?= __('Editar Tipos de Examen') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
            echo $this->Form->control('cantidad_variables');
            echo $this->Form->control('parametros');
        ?>
    </fieldset>
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
    <button id="enviar" type="edit" class="btn btn-success" >
        Guardar
    </button>
    <?= $this->Form->end() ?>
</div>
