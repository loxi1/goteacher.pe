<?php
    $this->load->library('Mobile_Detect');

    $this->detect = new Mobile_Detect;

    $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
?>
<!-- Page Content -->
<div class="container">
    <div class="row">        
        <!-- /.panel -->        
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="col-lg-12">
                    <h1 class="page-header">Trabaja 
                        <small>Con Nosotros</small>
                    </h1>
                </div>
                <!-- Content Row -->
                <?php if($deviceType=="computer") {?>
                <div class="row">
                    <!-- Map Column -->
                    <div class="col-md-12">
                        <!-- BANNER TRABAJA CON NOSOTROS -->
                        <img class="img-responsive" src="<?php echo base_url(); ?>utilitarios/img/banner/trabajaconnosotros.jpg" alt="TRABAJA CON NOSOTROS" title="TRABAJA CON NOSOTROS">
                    </div>
                </div>
                <!-- /.row -->
                <?php } ?>
                <div class="row"><p>&nbsp;</p></div>
                <!--pre><?php print_r($distritos); print_r($cursos); ?></pre-->
                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row text-center">
                    <div class="col-md-10 col-md-offset-1">
                        
                        <form class="form-horizontal" role="form" name="enviarMensaje" id="formInformes">
                          <legend class="scheduler-border">Envianos tu CV</legend>
                          <div class="form-group">
                            <label for="inputNombres" class="col-sm-2 control-label">Nombres<span>*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i>&nbsp;</span>
                                    <input type="text" class="form-control" name="inputNombres" id="inputNombres" placeholder="Nombres" aria-describedby="inputGroupSuccess2Status" required data-validation-required-message="Ingrese su Nombre.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputApellidos" class="col-sm-2 control-label">Apellidos<span>*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i>&nbsp;</span>
                                    <input type="text" class="form-control" name="inputApellidos" id="inputApellidos" placeholder="Apellidos" aria-describedby="inputGroupSuccess2Status"  required data-validation-required-message="Ingrese sus Apellidos.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputCelular">Celular<span>*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">&nbsp;<i class="fa fa-mobile-phone"></i>&nbsp;</span>
                                    <input type="text" class="form-control" name="inputCelular" id="inputCelular" placeholder="Celular" aria-describedby="inputGroupSuccess2Status">
                                    <p class="help-block"></p>
                                </div>
                            </div>                                
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputCorreo">Correo</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" name="inputCorreo" id="inputCorreo" placeholder="Correo" aria-describedby="inputGroupSuccess2Status">
                                    <p class="help-block"></p>
                                </div>
                            </div>                                
                          </div>

                          <div class="form-group">
                            <label for="inputDistrito" class="col-sm-2 control-label">Distito<span>*</span></label>
                            <div class="col-sm-10">
                              <select class="form-control" id="inputDistrito" name="inputDistrito">
                                  <option value="">Seleccione Distrito</option>
                                  <?php
                                    if(isset($distritos) && is_array($distritos))
                                    {
                                      foreach($distritos as $id_dist=>$distrito)
                                      {
                                  ?>
                                  <option value="<?php echo $id_dist;?>"><?php echo $distrito;?></option>
                                  <?php    
                                      }
                                    }
                                  ?>
                                </select>
                                <p class="help-block"></p>                                 
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputSevricio" class="col-sm-2 control-label">Servicio<span>*</span></label>                            
                              <div class="col-sm-10 media-heading check_radio">
                                <?php
                                if(isset($cursos[0]) && is_array($cursos))
                                {
                                  foreach ($cursos as $ex=>$value) {
                                ?>
                                <?php 
                                  $z=1;
                                  foreach ($value as $key => $value) {
                                    
                                    if($ex<=2) 
                                    {
                                        $style_chek_border = ($z%3==0)?(''):(' style_chek_border');
                                        $clas_num = 4;
                                    }
                                    elseif($ex<=4)
                                    {
                                        $style_chek_border = ($z%2==0)?(''):(' style_chek_border');
                                        $clas_num = 6;
                                    }
                                    else
                                    {
                                        $style_chek_border = '';
                                        $clas_num = 12;
                                    }
                                ?>
                                  <div class="media-heading col-md-<?php echo $clas_num;?> style_chek_color<?php echo $style_chek_border;?>">
                                      <label class="checkbox"><input type="checkbox" id="inlineCheckbox<?php echo $key;?>" value="<?php echo $key;?>" name="idCurso" value="<?php echo $key;?>">&nbsp;<?php echo $value;?> </label>
                                  </div>
                                <?php
                                  $z++;  
                                  }
                                ?>
                                <?php
                                  }
                                }
                                ?> 
                                    
                                    <div class="col-md-12 error_check">
                                      <p class="help-block"></p>
                                    </div>                                   
                              </div>
                          </div>                          

                            <div class="form-group  check_radio">
                                <label for="inputElija" class="col-sm-2 control-label">Adjuntar CV<span>*</span></label>
                                <div class="col-sm-10">
                                    <input id="adjuntarCV" type="file" name="adjuntarCV">
                                </div> 
                                <div class="col-md-12">
                                  <p class="help-block"></p>
                                </div> 
                            </div>
                          

                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="textareaComentario">Mensaje</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" id="textareaComentario" placeholder="Mensaje" name="textareaComentario"></textarea>
                                <p class="help-block"></p>
                            </div>                                
                          </div>

                          
                          
                          <div class="form-group">
                            <div class="col-sm-offset-6 col-sm-6">
                                <!--div class="col-md-4">
                                    <button type="button" class="btn btn-danger btn-lg center-block btn-block">Borrar</button>
                                </div>
                                <div class="col-md-8 col-md-offset-4">
                                    
                                </div-->
                              <button type="submit" class="btn btn-primary btn-lg center-block btn-block">&nbsp;<i class="fa fa-send"></i>&nbsp;&nbsp;Enviar</button>
                            </div>
                          </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<!-- /.container -->
<script type="text/javascript">
    ;(function( $ ) {

      // Browser supports HTML5 multiple file?
      var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
          isIE = /msie/i.test( navigator.userAgent );

      $.fn.customFile = function() {

        return this.each(function() {

          var $file = $(this).addClass('customfile'), // the original file input
              $wrap = $('<div class="customfile-wrap">'),
              $input = $('<input type="text" class="customfile-filename" />'),
              // Button that will be used in non-IE browsers
              $button = $('<button type="button" class="customfile-upload"><i class="fa fa-cloud-upload fa-1x"></i>&nbsp;&nbsp;CV</button>'),
              // Hack for IE
              $label = $('<label class="customfile-upload" for="'+ $file[0].id +'"><i class="fa fa-cloud-upload fa-1x"></i>&nbsp;&nbsp; CV</label>');

          // Hide by shifting to the left so we
          // can still trigger events
          $file.css({
            position: 'absolute',
            left: '-9999px'
          });

          $wrap.insertAfter( $file )
            .append( $file, $input, ( isIE ? $label : $button ) );

          // Prevent focus
          $file.attr('tabIndex', -1);
          $button.attr('tabIndex', -1);

          $button.click(function () {
            $file.focus().click(); // Open dialog
          });

          $file.change(function() {

            var files = [], fileArr, filename;

            // If multiple is supported then extract
            // all filenames from the file array
            if ( multipleSupport ) {
              fileArr = $file[0].files;
              for ( var i = 0, len = fileArr.length; i < len; i++ ) {
                files.push( fileArr[i].name );
              }
              filename = files.join(', ');

            // If not supported then just take the value
            // and remove the path to just show the filename
            } else {
              filename = $file.val().split('\\').pop();
            }

            $input.val( filename ) // Set the value
              .attr('title', filename) // Show filename in title tootlip
              .focus(); // Regain focus

          });

          $input.on({
            blur: function() { $file.trigger('blur'); },
            keydown: function( e ) {
              if ( e.which === 13 ) { // Enter
                if ( !isIE ) { $file.trigger('click'); }
              } else if ( e.which === 8 || e.which === 46 ) { // Backspace & Del
                // On some browsers the value is read-only
                // with this trick we remove the old input and add
                // a clean clone with all the original events attached
                $file.replaceWith( $file = $file.clone( true ) );
                $file.trigger('change');
                $input.val('');
              } else if ( e.which === 9 ){ // TAB
                return;
              } else { // All other keys
                return false;
              }
            }
          });

        });

      };

      // Old browser fallback
      if ( !multipleSupport ) {
        $( document ).on('change', 'input.customfile', function() {

          var $this = $(this),
              // Create a unique ID so we
              // can attach the label to the input
              uniqId = 'customfile_'+ (new Date()).getTime(),
              $wrap = $this.parent(),

              // Filter empty input
              $inputs = $wrap.siblings().find('.customfile-filename')
                .filter(function(){ return !this.value }),

              $file = $('<input type="file" id="'+ uniqId +'" name="'+ $this.attr('name') +'"/>');

          // 1ms timeout so it runs after all other events
          // that modify the value have triggered
          setTimeout(function() {
            // Add a new input
            if ( $this.val() ) {
              // Check for empty fields to prevent
              // creating new inputs when changing files
              if ( !$inputs.length ) {
                $wrap.after( $file );
                $file.customFile();
              }
            // Remove and reorganize inputs
            } else {
              $inputs.parent().remove();
              // Move the input so it's always last on the list
              $wrap.appendTo( $wrap.parent() );
              $wrap.find('input').focus();
            }
          }, 1);

        });
      }

    }( jQuery ));

    $('input[type=file]').customFile();
  </script>