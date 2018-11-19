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
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" src="<?php echo base_url(); ?>utilitarios/img/banner/escolar.jpg" alt="">
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12"><h3 class="page-header" style="border-bottom: none;">ASESORIA <small>ESCOLAR</small></h3></div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p class="letra_detalle">Este servicio está dirigido a niños y adolescentes en etapa escolar, con el objetivo de reforzar los cursos que llevan en el colegio y asi contribuir en mejorar el rendimiento academico en el área de matemáticas.</p>
                        <p>&nbsp;</p>
                        <p class="letra_detalle">Nuestros tutores estan formados estrictamente en pedagogia, transmiten sus conocimientos de manera práctica y didáctica con ejemplos sencillos y así generan una convicción en el estudiante.</p>
                     </div>
                     <div class="col-lg-8">
                        <div class="col-lg-11 content_circulo">
                            <div class="featured-media">            
                                <!-- CIRCULO GRANDE -->
                                <div class="main-featured-content ng-scope" ng-repeat="item in featured.content track by $index| limitTo: 5"> 
                                    <div ng-class="{reveal: isFeatured(item.item_index) & amp; & amp; backgroundLoaded, 'first-load': firstLoad}" class="featured-circle reveal"> 
                                        <div class="featured-bubble-content vertical-center"> 
                                            <div class="mask-featured-bubble-content"> 
                                                <!--h3 class="ng-binding">Ver el Contenido del Curso</h3--> 
                                                <p class="ng-binding letra_circulo">Ver el Contenido del Curso</p> 
                                                <a ng-href="#/drop/172?media=2" ng-show="!item.locked" name="viewDrop" class="btn-drop ng-binding letra_circulo" href="#/drop/172?media=2">Ver</a> 
                                            </div> 
                                        </div> 
                                        <div image-loader-src="item.featured_image" image-loader="" class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                            <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/"; ?>trigonometria.jpg&quot;);"></div>
                                            <div class="image-loader-progress"></div>
                                        </div> 
                                    </div> 
                                </div><!-- FIN CIRCULO GRANDE -->
                                
                                <div ng-style="circleStyle" media-circle="" class="featured-media-item item-0 revealed" ng-repeat="item in featured.content| limitTo: 5" style="width: 8.74584em; height: 8.74584em;">
                                    <div ng-class="{locked: (item.locked === true)}" class="featured-media-item-animation-container">
                                        <a ng-click="selectFeature(item.item_index)" class="featured-media-item-circle">
                                            <div image-loader-src="item.featured_image" image-loader="" class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                                <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/"; ?>fisica.jpg&quot;);">

                                                </div><div class="image-loader-progress"></div>

                                            </div>
                                            <div ng-style="labelStyle" class="featured-media-item-label" style="top: 4.465em; left: 8.465em;">
                                                <div ng-show="item.media_type === 'video'" class="media-object ng-hide"><img src="<?php echo base_url()."utilitarios/img/cursos/"; ?>libro.svg"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- end ngRepeat: item in featured.content | limitTo: 5 -->

                                <!-- end ngRepeat: item in featured.content | limitTo: 5 -->
                                <div ng-style="circleStyle" media-circle="" class="featured-media-item item-1 revealed" ng-repeat="item in featured.content| limitTo: 5" style="width: 8.74584em; height: 8.74584em;">
                                    <div ng-class="{locked: (item.locked === true)}" class="featured-media-item-animation-container">
                                        <a ng-click="selectFeature(item.item_index)" class="featured-media-item-circle">
                                            <div image-loader-src="item.featured_image" image-loader="" class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                                <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/"; ?>trigonometria.jpg&quot;);"></div>
                                                <div class="image-loader-progress"></div>

                                            </div>
                                            <div ng-style="labelStyle" class="featured-media-item-label" style="top: 8.043em; left: 2.043em;">
                                                <div ng-show="item.media_type === 'video'" class="media-object"><img src="<?php echo base_url()."utilitarios/img/cursos/"; ?>libro.svg"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end ngRepeat: item in featured.content | limitTo: 5 -->

                                <div ng-style="circleStyle" media-circle="" class="featured-media-item item-2 revealed" ng-repeat="item in featured.content| limitTo: 5" style="width: 8.74584em; height: 8.74584em;">            
                                    <div ng-class="{locked: (item.locked === true)}" class="featured-media-item-animation-container">
                                        <a ng-click="selectFeature(item.item_index)" class="featured-media-item-circle">
                                            <div image-loader-src="item.featured_image" image-loader="" class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                                <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/"; ?>geometria.jpg&quot;);">

                                                </div><div class="image-loader-progress"></div>

                                            </div>
                                            <div ng-style="labelStyle" class="featured-media-item-label" style="top: 7.46504em; left: 1.465em;">
                                                <div ng-show="item.media_type === 'video'" class="media-object ng-hide"><img src="<?php echo base_url()."utilitarios/img/cursos/"; ?>libro.svg"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end ngRepeat: item in featured.content | limitTo: 5 -->

                                <div ng-style="circleStyle" media-circle="" class="featured-media-item item-3 revealed" ng-repeat="item in featured.content| limitTo: 5" style="width: 8.74584em; height: 8.74584em;">
                                    <div ng-class="{locked: (item.locked === true)}" class="featured-media-item-animation-container">
                                        <a ng-click="selectFeature(item.item_index)" class="featured-media-item-circle">
                                            <div image-loader-src="item.featured_image" image-loader="" class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                                <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/"; ?>algebra.jpg&quot;);">

                                                </div>
                                                <div class="image-loader-progress"></div>

                                            </div>
                                            <div ng-style="labelStyle" class="featured-media-item-label" style="top: 7.5em; left: 1.515em;">
                                                <div ng-show="item.media_type === 'video'" class="media-object ng-hide"><img src="<?php echo base_url()."utilitarios/img/cursos/"; ?>libro.svg"></div>
                                            </div>
                                        </a>
                                    </div>  
                                </div><!-- end ngRepeat: item in featured.content | limitTo: 5 -->

                                <div ng-style="circleStyle" media-circle="" class="featured-media-item item-4 revealed" ng-repeat="item in featured.content| limitTo: 5" style="width: 8.74584em; height: 8.74584em;">
                                    <div ng-class="{locked: (item.locked === true)}" class="featured-media-item-animation-container">
                                        <a ng-click="selectFeature(item.item_index)" class="featured-media-item-circle">
                                            <div image-loader-src="item.featured_image" image-loader="" class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                                <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/"; ?>Modelo_servicio.jpg&quot;);">

                                                </div><div class="image-loader-progress">

                                                </div>

                                            </div>
                                            <div ng-style="labelStyle" class="featured-media-item-label" style="top: 6.5em; left: 8.45em;">
                                                <div ng-show="item.media_type === 'video'" class="media-object"><img src="<?php echo base_url()."utilitarios/img/cursos/"; ?>libro.svg"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end ngRepeat: item in featured.content | limitTo: 5 --> 

                                <div ng-style="circleStyle" media-circle="" class="featured-media-item item-5 revealed" ng-repeat="item in featured.content| limitTo: 5" style="width: 8.74584em; height: 8.74584em;">
                                    <div ng-class="{locked: (item.locked === true)}" class="featured-media-item-animation-container">
                                        <a ng-click="selectFeature(item.item_index)" class="featured-media-item-circle">
                                            <div image-loader-src="item.featured_image" image-loader="" class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                                <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/"; ?>aritmetica.jpg&quot;);">

                                                </div><div class="image-loader-progress"></div>

                                            </div>
                                            <div ng-style="labelStyle" class="featured-media-item-label" style="top: 7.46504em; left: 7.46504em;">
                                                <div ng-show="item.media_type === 'video'" class="media-object ng-hide"><img src="<?php echo base_url()."utilitarios/img/cursos/"; ?>libro.svg"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end ngRepeat: item in featured.content | limitTo: 5 --> 

                                <div ng-style="circleStyle" media-circle="" class="featured-media-item item-6 revealed" ng-repeat="item in featured.content| limitTo: 5" style="width: 8.74584em; height: 8.74584em;">
                                    <div ng-class="{locked: (item.locked === true)}" class="featured-media-item-animation-container">
                                        <a ng-click="selectFeature(item.item_index)" class="featured-media-item-circle">
                                            <div image-loader-src="item.featured_image" image-loader="" class="block-item-background image-loader ng-isolate-scope image-loader-complete">
                                                <div ng-style="backgroundImage" class="image-loader-element" style="background-image: url(&quot;<?php echo base_url()."utilitarios/img/cursos/"; ?>quimica.jpg&quot;);">

                                                </div>
                                                <div class="image-loader-progress"></div></div>
                                            <div ng-style="labelStyle" class="featured-media-item-label" style="top: 6.5em; left: 8em;">
                                                <div ng-show="item.media_type === 'video'" class="media-object ng-hide"><img src="<?php echo base_url()."utilitarios/img/cursos/"; ?>libro.svg"></div>
                                            </div>
                                        </a>
                                    </div>              
                                </div><!-- end ngRepeat: item in featured.content | limitTo: 5 --> 
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