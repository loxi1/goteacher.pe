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
                    <h1 class="page-header">Informes</h1>
                </div>
                <!-- Content Row -->
                <?php if($deviceType=="computer") {?>
                <div class="row">
                    <!-- Map Column -->
                    <div class="col-md-12">
                        <!-- BANNER INFORMES -->
                        <img class="img-responsive" src="<?php echo base_url(); ?>utilitarios/img/banner/informes.jpg" alt="INFORMES" title="INFORMES">
                    </div>
                </div>
                <!-- /.row -->
                <?php } ?>
                <div class="row"><p>&nbsp;</p></div>

                <!--pre><?php
                /*$array = array('apellido_email_teléfono');
                $separado_por_comas = implode(",", $array);
                print_r($separado_por_comas); print_r($distritos); print_r($universidad);*/?></pre-->
                <!-- Contact Form -->
                <div class="row text-center">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-horizontal" role="form" name="enviarMensaje" id="formInformes">
                          <legend class="scheduler-border">Envianos un Mensaje</legend>
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
                            <label class="col-sm-2 control-label" for="inputCelular">Celular</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">&nbsp;<i class="fa fa-mobile-phone"></i>&nbsp;</span>
                                    <input type="text" class="form-control" name="inputCelular" id="inputCelular" placeholder="Celular" aria-describedby="inputGroupSuccess2Status">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputCorreo">Correo<span>*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" name="inputCorreo" id="inputCorreo" placeholder="Correo" aria-describedby="inputGroupSuccess2Status">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputDistrito" class="col-sm-2 control-label">Distrito<span>*</span></label>
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
<?php
                              //echo "<pre>"; print_r($servicio); echo "</pre>";
                            ?>
                          <!--div class="form-group">
                            <label for="inputSevricio" class="col-sm-2 control-label">Servicio<span>*</span></label>

                            <div class="col-sm-10 media-heading check_radio" id="divServicios">
                            <?php
                              foreach ($servicio as $key => $value) {
                                $styl = ($key<3)?(" style_chek_border"):("");
                            ?>
                              <div class="col-md-4 style_chek_color <?php echo $styl;?>">
                                <label class="checkbox"><input type="checkbox" id="radio<?php echo $value['id_servicio'];?>" name="checkServ" value="<?php echo $value['id_servicio'];?>">&nbsp;<?php echo $value['nombre'];?></label>
                              </div>
                            <?php
                              }
                            ?>
                                    <div class="col-md-12 error_check">
                                      <p class="help-block"></p>
                                    </div>

                            </div>
                          </div>

                            <div class="form-group" id="divuniv">
                                <label for="inputElija" class="col-sm-2 control-label"></label>
                              <fieldset id="universidad_elije" class="check_radio">
                                <?php
                                if(isset($universidad[0][1]) && is_array($universidad))
                                {

                                  foreach ($universidad as $ex=>$value) {
                                ?>
                                <div class="col-sm-12 media-heading">
                                <?php
                                  $z=1;
                                  foreach ($value as $key => $value) {
                                    $style_chek_border = ($z%3==0)?(''):(" style_chek_border");
                                    $clas_num = 4;

                                ?>
                                  <div class="col-md-<?php echo $clas_num;?> style_chek_color<?php echo $style_chek_border;?>">
                                      <label class="checkbox"><input texto="<?php echo $value;?>" type="checkbox" id="inlineCheckbox<?php echo $key;?>" name="idCheck" value="<?php echo $key;?>">&nbsp;<?php echo $value;?> </label>
                                  </div>
                                <?php
                                    $z++;
                                  }
                                ?>
                                </div>
                                <?php
                                  }
                                }
                                ?>
                                <div class="col-md-12 error_check">
                                  <p class="help-block"></p>
                                </div>
                              </fieldset>
                            </div -->


                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="textareaMensaje">Mensaje</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" id="textareaMensaje" placeholder="Mensaje" name="textareaMensaje"></textarea>
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
                          <div id="contdivcheckuniv"></div>
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
