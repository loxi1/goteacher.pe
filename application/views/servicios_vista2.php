<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- /.panel -->
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Servicios</h1>
                    </div>
                </div>
                <!-- Image Header -->
                <?php
                    $banner = (isset($cursos['img']) && strlen(trim($cursos['img'])))?($cursos['img']):('escolar.jpg');
                    $servicio = (isset($cursos['servicio']) && strlen(trim($cursos['servicio'])))?($cursos['servicio']):('ESCOLAR');
                    $id_servicio = (isset($cursos['id_servicio']) && strlen(trim($cursos['id_servicio'])))?($cursos['id_servicio']):('3');
                    //echo "<pre>"; print_r($serivicios);  print_r($cursos['id_servicio']);echo "</pre>";
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" src="<?php echo base_url(); ?>utilitarios/img/banner/<?php echo $banner; ?>" title="ASESORIA <?php echo $servicio; ?>">
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12"><h3 class="page-header" style="border-bottom: none;">ASESORIA <small><?php echo $servicio; ?></small></h3></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                            switch ($id_servicio)
                            {
                                case '1':
                        ?>
                        <p>Este servicio está dirigido a jovenes que cursan los primeros ciclos en la universidad, asesóramos en teoría y práctica con resolución de problemas y ejercicios aplicados a la vida real.</p>
                        <p>&nbsp;</p>
                        <p>Nuestros tutores son especialistas en cada curso, tienen los conocimientos y la experiencia de enseñar a estudiantes de diferentes universidades del país:</p>
                        <p>&nbsp;</p>
                        <div class="row">
                        <div class="col-lg-12">
                            <?php

                            if(isset($universidad[0]) && is_array($universidad))
                            {

                              foreach ($universidad as $key => $univ) {
                            ?>
                            <?php
                              $z=1;
                              foreach ($univ as $value) {
                                echo $value.", ";
                              }
                            ?>
                            <?php
                              }
                            }
                            ?>
                            </div>

                        <?php
                                    break;
                                case '2':
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="letra_detalle">Este servicio está dirigido a jovenes y adolescentes que van a postular a las diversas universidades del país, y nuestro objetivo es preparlo con métodos y tecnicas para rendir un exámen de admisión y que el estudiante logre ingresar en el menor tiempo posible.</p>
                                <p>&nbsp;</p>
                                <p class="letra_detalle">Nuestros tutores son estudiantes y egresados de diferentes universidades del país:</p>
                        
                                <span>UNI,UNMSM, PUCP, ESAN</span>
                            
                                <p>tienen los conocimientos y la experiencia de haber rendido los exámenes más exigentes del país.</p>                                
                            </div>
                        <?php            break;
                                case '3':
                        ?>
                        <div class="row">
                                <div class="col-lg-12">
                                <p class="letra_detalle">Este servicio está dirigido a niños y adolescentes en etapa escolar, con el objetivo de reforzar los cursos que llevan en el colegio y asi contribuir en mejorar el rendimiento academico en el área de matemáticas.</p>
                                <p>&nbsp;</p>
                                <p class="letra_detalle">Nuestros tutores estan formados estrictamente en pedagogia, transmiten sus conocimientos de manera práctica y didáctica con ejemplos sencillos y así generan una convicción en el estudiante.</p>
                            </div>
                        <?php
                                    break;

                                default:

                                    break;
                            }
                        ?>

                     </div>
                    </div><!-- /.col-lg-8 -->


                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="breadcrumb">
                                <li><span style="font-size:30px; color:#000; text-decoration:underline;">CURSOS</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            
                        </div>

                    </div>
                    <?php
                    if(isset($cursos['curso']) && is_array($cursos['curso']))
                    {
                        $letra = substr($servicio, 0, 1);
                        $url = str_replace(' ', '', mb_strtolower($servicio));
                        $cant_total = count($cursos['curso']);
                        $cant_t_item = count($cursos['curso'][($cant_total-1)]);
                        foreach ($cursos['curso'] as $tot=>$value)
                        {
                    ?>
                    <div class="row portfolio-items">
                    <div class="col-lg-12" style="padding-right: 0px ! important;">
                    <?php
                    $this->load->library('Mobile_Detect');

                $this->detect = new Mobile_Detect;
    
                $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
                            foreach ($value as $key => $det)
                            {
                                $pdf = base_url()."utilitarios/silabus/".$url."/".$det['codigo'].$letra.".pdf";
                     ?>
                        <div class="col-md-4">
                            <div class="list-group">
                            <?php if($deviceType=="computer") {?>                            
                            <a title="Ver Syllabus" url="<?php echo $pdf; ?>" href="http://www.activeaxon.com/html/kanzi/new/media/portfolio8.jpg" class="ver-pdf" curso="<?php echo $det['curso']; ?>"><span class="fa fa-check fa-1x"></span> <?php echo $det['curso'];?></a>
                            <?php } else { ?>
                            <a title="Ver Syllabus" href="<?php echo $pdf; ?>" class="list-group-item" style="border: none !important;">
                            <span class="fa fa-check fa-1x"></span> <?php echo $det['curso'];?></a>
                            <?php } ?>
                            </div>
                        </div>
                    <?php
                            if($tot==($cant_total-1) && $key==($cant_t_item-1))
                            {
                  ?>          <div class="col-md-8">
                              <div class="row">
                                <p align="center" style="font-size:28px; margin-left:5px;"><i class="fa fa-whatsapp"></i> WhatsApp 989984417</p>                               
                              </div>
                              </div>
                              <?php
                            }
                            }
                    ?>
</div>
                    </div>
                    <?php
                        }
                    }
                    ?>

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
    $( ".circulopeq" ).on( "click", function() {
        $( '#'+$('.featured-media').attr('inicia') ).removeClass( "reveal" );
        $( '#'+$( this ).attr('cambiar') ).addClass( "reveal" );
        $('.featured-media').attr('inicia', $( this ).attr('cambiar'));
    });

</script>