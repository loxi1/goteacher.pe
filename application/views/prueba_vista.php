<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        
        </head>    

    <body background="<?php echo base_url(); ?>utilitarios/img/fondo/bg.png">

<SELECT id="op_carrera" NAME="op_carrera" MULTIPLE size="5"> 
  <option selected="" VALUE="1">Todos</option> 
  <option selected="" VALUE="2">Nato</option>  
  <option selected="" VALUE="3">Felix</option> 
  <option selected="" VALUE="4">Rataro</option> 
  <option selected="" VALUE="5">Chipi</option>  
  </SELECT>

  <button>Clear Log</button>
    <div id="log"></div>
    
    <script src="<?php echo base_url(); ?>utilitarios/js/jquery2.1.3.min.js"></script>
         <script>
         var $op_carrera = $('#op_carrera');

            var anteriorArray = ($op_carrera.val()) ? $op_carrera.val() : '';
            //console.log('Inicio->'+anteriorArray+' Son->'+anteriorArray.length+' Primero->'+anteriorArray[0]);
            var todos = anteriorArray;
            $("#op_carrera option:selected").removeAttr("selected");
            anteriorArray = ($op_carrera.val()) ? $op_carrera.val() : '';
            //console.log('Inicio->'+anteriorArray);

            $( "select#op_carrera" ).change(function () {

              var actualArray = ($(this).val()) ? ($(this).val()) : '';              
              var op_;
              if(actualArray.length>=anteriorArray.length)
              {
                op_ = 'Seleciono';
                changes = $.grep(actualArray, function(n) {
                  return $.inArray(n, anteriorArray) == -1;
                });
              }
              else
              {
                op_ = 'Removio';
                changes = $.grep(anteriorArray, function(n) {
                    return $.inArray(n, actualArray) == -1;
                });
                if(changes.length>1)
                {
                  changes=actualArray;
                }
              }

              
              if(changes==1)
              {
              	if(op_=="Seleciono")
              	{
              	$('#op_carrera option').prop('selected', true);
                  actualArray = todos;
              	}
              	else
              	{
              	$('#op_carrera option').prop('selected', false);
                  actualArray = [];
              	}
              } 
              else 
              {
                if(($('#op_carrera option').length-1)==actualArray.length && op_=="Seleciono")
                {
                  $('#op_carrera option').prop('selected', true);
                  actualArray = todos;
                }

                if(anteriorArray==todos && op_=="Removio")
                {
                  actualArray.shift();
                  $('#op_carrera option[value="1"]').removeAttr("selected");
                }
              }
              $('#log').append('<p> op_->'+op_+' anteriorArray-> '+anteriorArray+' actualArray-> '+actualArray+' changes->'+changes+'</p>');  
                  
              anteriorArray = (actualArray.length) ? actualArray : [];

            }).change();

          
        </script>
    </body>
    </html>