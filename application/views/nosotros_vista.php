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
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nosotros</h1>
                    </div>
                </div>
                <?php if($deviceType=="computer") {?>
                <!-- Image Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" src="<?php echo base_url(); ?>utilitarios/img/banner/nosotros.jpg" alt="NOSOTROS" title="NOSOTROS">
                    </div>
                </div>
<?php } ?>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/utilitarios/img/nosotros/hombre_mision.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">MISIÓN</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p align="justify">Somos un grupo de estudio que nos dedicamos a la enseñanza de las matemáticas buscando el desarrollo  personal de nuestros estudiantes, brindamos conocimientos básicos y avanzados con la finalidad de contribuir a formar una base sólida.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/utilitarios/img/nosotros/hombre_vision.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">VISIÓN</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p align="justify">Ser un centro de estudio líder y de referencia en la enseñanza de las matemáticas y a utilizar los avances tecnológicos al alcance de ustedes.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/utilitarios/img/nosotros/hombre_objetivo.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">OBJETIVOS</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p align="justify">Lograr el aprendizaje de nuestros estudiantes de una manera clara y con una gran capacidad de análisis, buscando generar una convicción en el estudiante.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/utilitarios/img/nosotros/vision1.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">ESTRATEGIA</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p align="justify">En el grupo de estudio DELFOS nos enfocamos en 4 principios fundamentales.</p>
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <p>&nbsp;</p>
                                                <dl class="dl-horizontal">
                                                    <dt class="sty_dt">Operaciones básicas</dt>
                                                    <dd>Enseñamos todos los operadores universales de las matemáticas.</dd>
                                                    <dt>&nbsp;</dt><dd>&nbsp;</dd>
                                                    <dt class="sty_dt">Planteamiento del problema</dt>
                                                    <dd>Implica en  comprender lo que se lee con el fin de analizar y plantear un problema utilizando métodos y técnicas para la resolución del mismo.</dd>
                                                    <dt>&nbsp;</dt><dd>&nbsp;</dd>
                                                    <dt class="sty_dt">Habilidades matemáticas</dt>
                                                    <dd>Se le brinda técnicas  y estrategias para memorizar las fórmulas y así  ayudarlos  a ser  competitivos y ser el mejor.</dd>
                                                    <dt>&nbsp;</dt><dd>&nbsp;</dd>
                                                    <dt class="sty_dt">Concentración</dt>
                                                    <dd>Trabajamos con la ayuda de un psicólogo para poder mejorar la concentración.</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<!-- /.container -->
