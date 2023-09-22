<?php 
	$this->load->library('Mobile_Detect');

    $this->detect = new Mobile_Detect;

    $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    $this->device = $deviceType;
    
    $txtWhatsapp= ($this->device=="phone")?("WhatsApp"):('');
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="navbar-inicio">
    <div class="container cambiocontainer">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">            
            <!-- INFORMACION GOTEACHER -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <?php
                
                $imgurl = 'favicon_logo.png';
                $width_ = '150';
                //$scriptVersion = $this->detect->getScriptVersion();
                //print_r($this->device); //print_r($scriptVersion);
                ?>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                
                <img width="<?php echo $width_;?>" src="<?php echo base_url();?>/utilitarios/img/logo/<?php echo $imgurl;?>" alt="">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="top__right col-md-12 col-sm-12">
                <span><i class="fa fa-mobile-phone fa-1x"></i> 989 984 417 </span>
                <span><i class="fa fa-whatsapp"></i>  989 984 417</span>
                <span><i class="fa fa-envelope-o"><a href="http://localhost/gdelfos/Informes" style="text-decoration:none;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif !important; color:#fff; font-size: 19px;"> informes@goteacherperu.com</a></i></span>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="cambia-navbar-nav" href="<?php echo base_url(); ?>">INICIO</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>Nosotros">NOSOTROS</a>
                </li>
                <!-- Accordion demo -->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> SERVICIOS <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu list-group">
                        <li class="list-group-item"><a tabindex="-1" href="<?php echo base_url(); ?>Servicios/universitaria"> Asesor&iacutea Universitaria </a></li>
                        <li class="list-group-item"><a tabindex="-1" href="<?php echo base_url(); ?>Servicios/preuniversitaria"> Asesor&iacutea Pre Universitaria </a></li>
                        <li class="list-group-item"><a tabindex="-1" href="<?php echo base_url(); ?>Servicios/escolar"> Asesor&iacutea Escolar </a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>Informes">INFORMES</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>Trabajaconnostros">TRABAJA CON NOSOTROS</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
    </div>
</nav>