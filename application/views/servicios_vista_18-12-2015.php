<!-- Page Content -->
<div class="container">
    <div class="row">        
        <!-- /.panel -->        
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Servicios
                        </h1>
                    </div>
                </div>
                <!-- Image Header -->
                <?php
                    $banner = (isset($cursos['img']) && strlen(trim($cursos['img'])))?($cursos['img']):('escolar.jpg');
                    $servicio = (isset($cursos['servicio']) && strlen(trim($cursos['servicio'])))?($cursos['servicio']):('ESCOLAR');
                    $id_servicio = (isset($cursos['id_servicio']) && strlen(trim($cursos['id_servicio'])))?($cursos['id_servicio']):('3');
                    //echo "<pre>"; print_r($cursos); echo "</pre>";
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
                    <div class="col-lg-4">
                        <?php
                            switch ($id_servicio) 
                            {
                                case '1':
                        ?>
                        <p>Este servicio está dirigido a jovenes que cursan los primeros ciclos en la universidad, asesóramos en teoría y práctica con resolución de problemas y ejercicios aplicados a la vida real.</p>
                        <p>&nbsp;</p>
                        <p>Nuestros tutores son especialistas en cada curso, tienen los conocimientos y la experiencia de enseñar a estudiantes de diferentes universidades del país:</p> 
                        
                        <ul class="list-group">
                            <li class="list-group-item">PUCP</li>
                            <li class="list-group-item">UNMSM</li>
                            <li class="list-group-item">UPC</li>
                            <li class="list-group-item">ESAN</li>
                            <li class="list-group-item">UCV</li>
                            <li class="list-group-item">UPN</li>
                            <li class="list-group-item">USMP</li>
                            <li class="list-group-item">UIGV</li>
                            <li class="list-group-item">URP</li>
                            <li class="list-group-item">UCSS</li>
                            <li class="list-group-item">SeUCS UNALM</li>
                            <li class="list-group-item">Universidad de Lima</li>
                          </ul>                                   
                        <?php
                                    break;
                                case '2':                                    
                        ?>
                        <p class="letra_detalle">Este servicio está dirigido a jovenes y adolescentes que van a postular a las diversas universidades del país, y nuestro objetivo es preparlo con métodos y tecnicas para rendir un exámen de admisión y que el estudiante logre ingresar en el menor tiempo posible.</p>
                        <p>&nbsp;</p>
                        <p class="letra_detalle">Nuestros tutores son estudiantes y egresados de diferentes universidades del país:</p>
                        <ul class="list-group">
                            <li class="list-group-item">UNI</li>
                            <li class="list-group-item">UPC</li>
                            <li class="list-group-item">UNMSM</li>
                          </ul>
                          <p>tienen los conocimientos y la experiencia de haber rendido los exámenes más exigentes del país.</p>
                        <?php            break;
                                case '3':
                        ?>
                        <p class="letra_detalle">Este servicio está dirigido a niños y adolescentes en etapa escolar, con el objetivo de reforzar los cursos que llevan en el colegio y asi contribuir en mejorar el rendimiento academico en el área de matemáticas.</p>
                        <p>&nbsp;</p>
                        <p class="letra_detalle">Nuestros tutores estan formados estrictamente en pedagogia, transmiten sus conocimientos de manera práctica y didáctica con ejemplos sencillos y así generan una convicción en el estudiante.</p>                                    
                        <?php            
                                    break;       
                                
                                default:

                                    break;
                            }
                        ?>
                        
                     </div>
                     <div class="col-lg-8">
                        <div class="col-lg-11 content_circulo">
                            <div class="featured-media" inicia="grande_0">            
                                

                                <!-- CIRCULOS GRANDE -->
                                <?php
                                if(isset($cursos['curso'][0]['curso']) && strlen($cursos['curso'][0]['curso'])>0)
                                {
                                    $st_fm[0] = "top: 4.465em; left: 8.465em;";
                                    $st_fm[1] = "top: 8.043em; left: 2.043em;";
                                    $st_fm[2] = "top: 7.46504em; left: 1.465em;";
                                    $st_fm[3] = "top: 7.5em; left: 1.515em;";
                                    $st_fm[4] = "top: 6.5em; left: 8.45em;";
                                    $st_fm[5] = "top: 7.46504em; left: 7.46504em;";
                                    $st_fm[6] = "top: 6.5em; left: 8em;";

                                    $letra = substr($servicio, 0, 1);
                                    $url = str_replace(' ', '', mb_strtolower($servicio));
                                    foreach ($cursos['curso'] as $ite => $valor) 
                                    {
                                        $clase = ($ite==0)?(" reveal"):("");
                                        $pdf = base_url()."utilitarios/silabus/".$url."/".$valor['codigo'].$letra.".pdf";

                                ?>

                                <div class="main-featured-content ng-scope"> 
                                    <div class="featured-circle<?php echo $clase; ?>" id="grande_<?php echo $ite;?>"> 
                                        <div class="featured-bubble-content vertical-center"> 
                                            <div class="mask-featured-bubble-content">
                                                <p class="ng-binding letra_circulo">Ver el Contenido del Curso</p> 
                                                <a url="<?php echo $pdf; ?>" class="btn-drop ng-binding letra_circulo ver-pdf" curso="<?php echo $valor['curso']; ?>" href="#">Ver Syllabus</a> 
                                            </div> 
                                        </div> 
                                        <div class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                            <div class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/".$valor['img']; ?>&quot;);"></div>
                                            <div class="image-loader-progress"></div>
                                        </div> 
                                    </div> 
                                </div>

                                <?php
                                    }   
                                ?>
                                <!-- FIN CIRCULOS GRANDE -->

                                <!-- circulos pequeños -->
                                <?php
                                
                                    foreach ($cursos['curso'] as $item => $valores) {
                                ?>

                                <div title="<?php echo $valores['curso']; ?>" class="featured-media-item item-<?php echo $item; ?> revealed" style="width: 8.74584em; height: 8.74584em;">
                                    <div class="featured-media-item-animation-container">
                                        <a class="featured-media-item-circle circulopeq" cambiar="grande_<?php echo $item;?>">
                                            <div class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                                <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/".$valores['img']; ?>&quot;);">

                                                </div><div class="image-loader-progress"></div>

                                            </div>
                                            <div class="featured-media-item-label" style="<?php echo $st_fm[$item];?>">
                                                <div class="media-object ng-hide"><img src="<?php echo base_url()."utilitarios/img/cursos/"; ?>libro.svg"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <?php        
                                    }
                                ?>
                                <!-- fin circulos pequeños -->
                                <?php    
                                }
                                ?>                                
                            </div>
                        </div>              
                    </div><!-- /.col-lg-8 -->
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