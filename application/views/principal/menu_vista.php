    <?php 
	$this->load->library('Mobile_Detect');

    $this->detect = new Mobile_Detect;

    $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    $this->device = $deviceType;

?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="navbar-inicio">
    <div class="container cambiocontainer">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header idnavbar" id="idnavbar">            
            <!-- INFORMACION GOTEACHER>
            <button style="margin-top: 20px !important" type="button" class="navbar-toggle noclick" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button -->
<?php
                
                $imgurl = 'logo_icon.png';
                $width_ = '76';
                $heigh_ = "height='100'";
                //$scriptVersion = $this->detect->getScriptVersion();
                //print_r($this->device); //print_r($scriptVersion);
                ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">

<?php
    if($this->device=='phone'){
?>
            <img style="display: inline; padding-left: 10px !important;" width="<?php echo $width_;?>" <?php echo $heigh_;?> src="<?php echo base_url();?>/utilitarios/img/logo/<?php echo $imgurl;?>" alt="">
            <div style="color:#fff; font-size: 20px !important; display: inline;"><i class="fa fa-mobile-phone fa-1x"></i> 989 984 417  / <i class="fa fa-whatsapp fa-1x"></i> 989 984 417 </div>
<?php
    }
?>                
            </a>

                
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php
    $clase = "";
    $margtipo = "";
    if($this->device=="computer")
    {
        $margtipo = "margtipo";
        $clase = "cambia-navbar-nav";
?>
            <div class="top__right col-md-12 col-sm-12 txt-center">
                <p class="text-center">
                    <span><i class="fa fa-mobile-phone fa-1x"></i> 989 984 417  </span>
                    <span><?php echo "WhatsApp:";?> 989 984 417 </span>
                    <span><i class="fa fa-envelope-o"><a href="<?php echo base_url(); ?>Informes" class="infotxt"> informes@goteacherperu.com</a></i></span>
                </p>
            </div>
            <br/>
<?php
    }               
?>          
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
    </div>
</nav>