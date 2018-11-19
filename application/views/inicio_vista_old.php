<?php 
    $this->load->library('Mobile_Detect');

    $this->detect = new Mobile_Detect;

    $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    $this->device = $deviceType;
?>
<!-- Page Content -->
<div class="container" style="margin-top:20px;">

    <div class="row">        
        <!-- /.panel -->
        <?php
    $stile = "";
    if($this->device=="phone")
    {
        $stile="padding-right: 0 !important;";
    }
    else
    {
?>
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo base_url(); ?>utilitarios/img/slider/img_1.png" alt="Acesoria Virtual">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                <div class="item">
                  <img src="<?php echo base_url(); ?>utilitarios/img/slider/img_2.png" alt="Clases Personalizadas">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
<?php
    }
?>      
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
    <!-- Marketing Icons Section -->
    <div class="row portfolio-items" style="<?php echo $stile;?>">
        <div class="col-lg-12">
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
    <!-- /.row -->

    <!-- Marketing Icons Section -->
    <div class="row portfolio-items" style="<?php echo $stile;?>">
        <div class="col-lg-12">
            <h1 class="page-header sansserif">CURSOS ESPECIALES</h1>
        </div>
        <div class="col-xs-12" style="<?php echo $stile;?>">
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
    <!-- /.row -->

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header sansserif">GO TEACHER</h1>
        </div>
        <div class="col-xs-12">
            <div class="col-md-12 col-sm-12 col-xs-12">
                GO TEACHER  te puede ayudar en diferentes materias de Matem&aacuteticas y Ciencias:
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
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



    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header sansserif">ASESOR&IacuteAS VIRTUALES</h2>
        </div>
        <div class="col-md-6">
            <p>Este nuevo servicio permite a los estudiantes recibir clases personalizadas. <br/>Requisitos:</p>
            <ul>
                <li>Usar una computadora, laptop o dispositivo m&oacutevil.</li>
                <li>Tener conecci&oacuten a internet.</li>
                <li>
                    Conectarse remotamente con Teamviewer.
                    <a href="http://download.teamviewer.com/download/TeamViewer_Setup_es-lgr.exe" class="btn-outline" role="button">
                        <span><img src="<?php echo base_url(); ?>utilitarios/img/caja/teamviewer-icon.png" width="25" height="25" class="btn-outline" /> Descargar </span>
                    </a>
                    </a>
                </li>
                <li>Para m&aacutes informaci&oacuten del Teamviewer.  <a href="javascript:void(0);" class="btn btn-link" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/Rf0X0JlQuCM" >VIDEO</a></li>
                <li>Contactarse para confirmar la fecha y la hora.</li>
            </ul>                    
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="<?php echo base_url(); ?>/utilitarios/img/banner/asesoriavirtual.jpg" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

           
</div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
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