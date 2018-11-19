<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        
        </head>    

    <body background="<?php echo base_url(); ?>utilitarios/img/fondo/bg.png">

<SELECT id="op_carrera" NAME="op_carrera" MULTIPLE size="8"> 
  <option VALUE="0">Todos</option> 
  <option VALUE="2">Nato</option>  
  <option VALUE="3">Felix</option> 
  <option VALUE="4">Rataro</option> 
  <option VALUE="5">Chipi</option>  
  </SELECT>

  <button>Clear Log</button>
    <div id="log"></div>
    
    <script src="<?php echo base_url(); ?>utilitarios/js/jquery2.1.3.min.js"></script>
        <script>
          $('#op_carrera option').attr('selected','selected');
          var todos = $('#op_carrera').val();
          console.log(todos);

          $("#op_carrera option:selected").removeAttr("selected");
          anteriorArray = ($('#op_carrera').val()) ? $('#op_carrera').val() : '';

          console.log('todos-> '+todos+' anteriorArray->'+anteriorArray);

          $( "select#op_carrera" ).change(function () {
            var actualArray = ($(this).val()) ? ($(this).val()) : ''; 
            var actualArray = dondeestudiobuscar($(this).attr('id'), todos, anteriorArray, actualArray); 
            anteriorArray = (actualArray.length) ? actualArray : [];     
          }).change();

          function dondeestudiobuscar(id, todos, anteriorArray, actualArray) { console.log(id+' -- '+todos+' -- '+anteriorArray);
                        
            var op_;
            if(actualArray.length>=anteriorArray.length){
              op_ = 'ss';
              changes = $.grep(actualArray, function(n) {
                return $.inArray(n, anteriorArray) == -1;
              });
            }
            else
            {
              op_ = 'rr';
              changes = $.grep(anteriorArray, function(n) {
                  return $.inArray(n, actualArray) == -1;
              });
              if(changes.length>1) { changes=actualArray; }
            }

            if(changes=='0') {
              if(op_=="ss") {
                $('#'+id+' option').prop('selected', true); actualArray = todos;
              } else {
                $('#'+id+' option').prop('selected', false); actualArray = [];
              }
            } 
            else {
              if(($('#'+id+' option').length-1)==actualArray.length && op_=="ss") {
                $('#'+id+' option').prop('selected', true); actualArray = todos;
              }

              if(anteriorArray==todos && op_=="rr") {
                actualArray.shift(); $('#'+id+'  option[value="0"]').removeAttr("selected");
              }
            }
            
            $('#log').append('<p> op_->'+op_+' anteriorArray-> '+anteriorArray+' actualArray-> '+actualArray+' changes->'+changes+'</p>');           
            return actualArray;
         }          
        </script>
    </body>
    </html>