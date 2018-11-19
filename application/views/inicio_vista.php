<?php 
    $this->load->library('Mobile_Detect');

    $this->detect = new Mobile_Detect;

    $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    $this->device = $deviceType;
?>
<!-- Page Content -->
<?php
    $clas = "margin-top:80px; ";
    $clap = "";
    $stile = "";
    if($this->device=="phone")
    {
        $stile="padding-right: 0 !important;";
        $clas =  "margin-top:90px; ";
?>
<div class="container" style="<?php echo $clas;?>">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p>&nbsp;</p>
                <a href="#enviarmsn" type="button" class="btn btn-warning btn-lg center-block btn-block enviarmsn">&nbsp;<i class="fa fa-send"></i>&nbsp;&nbsp;Enviar Mensaje</a>
            </div>            
        </div>
    </div>
</div>             

<?php
        $clap = "padding-right: 15px;";
        $clas = "";
    }
    else
    {
?>
<div class="container" style="<?php echo $clas.$clap;?>">
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="<?php echo base_url(); ?>/utilitarios/img/banner/logos.png" alt="GO Teacher">
                </div>
            </div>
            <div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><p>&nbsp;</p></div></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p class="text-justifi">Somos un grupo de estudio academico que nos dedicamos a la <b>enseñanza de las matemáticas</b> buscando el desarrollo personal de nuestros estudiantes, brindamos conocimientos básicos y avanzados, dirigidos a estudiantes escolares y universitarios.</p>
                    <p class="text-justifi">Nuestros asesores son especialistas en cada materia de las matematicas y transmiten sus conocimientos con facilidad para mejorar el aprendizaje de nuestros estudiantes</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row"><p>&nbsp;</p></div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="#enviarmsn" type="button" class="btn btn-warning btn-lg center-block btn-block enviarmsn">&nbsp;<i class="fa fa-send"></i>&nbsp;&nbsp;Enviar Mensaje</a>
                    </div>
                </div>                
            </div>
        </div>      
    </div>
</div>

<?php $clas="";
    }
?>

<div class="container" style="<?php echo $clas;?>">

    <div class="row">        
        <!-- /.panel -->
        
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
            <!-- Marketing Icons Section -->
                <div class="row portfolio-items" style="<?php echo $stile;?>">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-header sansserif">ASESOR&IacuteA</h1>
                        </div>
                        <div class="col-xs-12" style="<?php echo $stile;?>">
                        <?php
                            if(is_array($caja) && isset($caja[0]['nombre'])) 
                            {
                                foreach ($caja as $ki=> $value) 
                                {
                ?>
                            <div class="col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px; <?php echo $stile;?>">
                                <a title="<?php echo $value['nombre'];?>" href="<?php echo base_url(); ?>Servicios/<?php echo substr_replace($value['img'], '', -4);?>">
                                <img src="<?php echo base_url(); ?>utilitarios/img/caja/<?php echo $value['img'];?>" class="img-responsive center-block" title="ASESORIA <?php echo $value['nombre'];?>"/></a>
                            </div>    
                <?php
                                }
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Marketing Icons Section -->
                <div class="row portfolio-items" style="<?php echo $stile;?>">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-header sansserif">CURSOS ESPECIALES</h1>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="<?php echo $stile;?>">
                            <div class="col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px; <?php echo $stile;?>">
                                <img src="<?php echo base_url(); ?>utilitarios/img/caja/estadistica.jpg" class="img-responsive center-block" title="ASESORIA ESTADISTICA"/>            
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px; <?php echo $stile;?>">
                                <img src="<?php echo base_url(); ?>utilitarios/img/caja/mecanica_de_fluidos.jpg" class="img-responsive center-block" title="ASESORIA MECANICA DE FLUIDOS"/>            
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px; <?php echo $stile;?>">
                                <img src="<?php echo base_url(); ?>utilitarios/img/caja/matematica_finaciera.jpg" class="img-responsive center-block" title="ASESORIA MATEMATICA FINANCIERA"/>            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Marketing Icons Section -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-header sansserif">GO TEACHER</h1>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                GO TEACHER  te puede ayudar en diferentes materias de Matem&aacuteticas y Ciencias:
                            </div>            
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Aritm&eacutetica</a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> &Aacutelgebra
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Geometr&iacutea
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Trigonometr&iacutea
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> F&iacutesica
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Qu&iacutemica
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Razonamiento Matem&aacutetico
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Estadistica y Probabilidades
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Estadistica Aplicada
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Calculo I
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Calculo II
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="javascript:void(0);" class="list-group-item" style="border: none !important;">
                                <span class="fa fa-check"></span> Calculo III
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row"><p>&nbsp;</p></div>
                <!-- Features Section -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    	<div class="col-md-6 col-sm-6 col-xs-12">
                            <h2 class="page-header sansserif">ASESOR&IacuteAS VIRTUALES</h2>
                            <p class="text-justifi">Este nuevo servicio permite a los estudiantes recibir clases personalizadas via <b>WhatsApp</b> </p>
                            <p>Requisitos:</p>            

                            <ul>
                                <li>Tener un celular smartphone(inteligente) </li>
                                <li>Tener conecci&oacuten a internet o tener megas.</li>
                                <li>Agregar # de WhatsApp 989 984 417.</li>
                            </ul>
                            <img class="img-responsive" src="<?php echo base_url(); ?>/utilitarios/img/banner/asesoriavirtual.jpg" alt="">
                        </div> 
                        <div class="col-md-6 col-sm-6 col-xs-12" name="enviarmsn" id="enviarmsn">
                            <h2 class="page-header sansserif">Envianos un Mensaje</h2>
                            <form class="form-horizontal" role="form" name="enviarMensaje" id="formInformes" novalidate="novalidate">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>&nbsp;</span>
                                            <input type="text" class="form-control" name="inputNombres" id="inputNombres" placeholder="Nombres" aria-describedby="inputGroupSuccess2Status" required="" data-validation-required-message="Ingrese su Nombre." aria-required="true">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>&nbsp;</span>
                                            <input type="text" class="form-control" name="inputApellidos" id="inputApellidos" placeholder="Apellidos" aria-describedby="inputGroupSuccess2Status" required="" data-validation-required-message="Ingrese sus Apellidos." aria-required="true">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">&nbsp;<i class="fa fa-mobile-phone"></i>&nbsp;</span>
                                            <input type="text" class="form-control" name="inputCelular" id="inputCelular" placeholder="Celular" aria-describedby="inputGroupSuccess2Status">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" name="inputCorreo" id="inputCorreo" placeholder="Correo" aria-describedby="inputGroupSuccess2Status">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                      <select class="form-control" id="inputDistrito" name="inputDistrito">
                                          <option value="">Seleccione Distrito</option>
                                            <option value="1714">LA MOLINA</option>
                                            <option value="1719">MIRAFLORES</option>
                                            <option value="1744">SAN BORJA</option>
                                            <option value="2360">SURCO</option>
                                            <option value="1651">CHORRILLOS</option>
                                            <option value="1746">LOS OLIVOS</option>
                                            <option value="1738">INDEPENDENCIA</option>
                                            <option value="1646">ATE</option>
                                            <option value="1731">SAN MIGUEL</option>
                                            <option value="2363">OTROS</option>
                                          </select>
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea class="form-control" rows="3" id="textareaMensaje" placeholder="Mensaje" name="textareaMensaje"></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-6 col-sm-6">
                                      <button type="submit" class="btn btn-primary btn-lg center-block btn-block">&nbsp;<i class="fa fa-send"></i>&nbsp;&nbsp;Enviar</button>
                                    </div>
                                </div>
                            </form>
                    
                        </div>                  
                    </div>
                </div>
                <!-- /.row -->

                <hr>

           
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <iframe width="100%" height="350" src=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    });

    //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
    function autoPlayYouTubeModal() {
        var trigger = $("body").find('[data-toggle="modal"]');
        trigger.click(function () {
            var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-theVideo"),
                    videoSRCauto = videoSRC + "?autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function () {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    }
    $(document).ready(function () {
        autoPlayYouTubeModal();        
    });
</script>