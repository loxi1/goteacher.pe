<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $this->load->library('Mobile_Detect');

    $this->detect = new Mobile_Detect;

    $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    $this->device = $deviceType;
    
    $txtWhatsapp= ($this->device=="phone")?("WhatsApp"):('');
?>
<!DOCTYPE html>
<html lang="en">

    <head itemscope itemtype="http://schema.org/WebSite">
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
        <link rel="canonical" href="https://www.goteacherperu.com/" itemprop="url">
          <!--Mobile Stuff-->
          <meta name="google-site-verification" content="EFqy1tkRxxQ1tlJauSbT-pnIvdZtGid_TBf0aeMC5UY" />
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="apple-mobile-web-app-capable" content="yes">
          <link rel="apple-touch-icon" href="<?php echo base_url(); ?>utilitarios/img/icon_social/mysite-icon-ipad.jpg">
          <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>utilitarios/img/icon_social/mysite-icon-ipad.jpg">
          <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>utilitarios/img/icon_social/mysite-icon-iphone-retina.jpg">
          <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>utilitarios/img/icon_social/mysite-icon-ipad-retina.jpg">
          <!--Twitter-->
          <meta name="twitter:card" content="mypicture">
          <meta name="twitter:site" content="@MyTwitter">
          <meta name="twitter:title" content="goteacherperu">
          <meta name="twitter:description" content="Resolvemos tus problemas">
          <meta name="twitter:image" content="<?php echo base_url(); ?>utilitarios/img/icon_social/linktoapicture.jpg">
          <!--Facebook-->
          <meta property="og:image" content="<?php echo base_url(); ?>utilitarios/img/icon_social/linktoapicture.jpg" itemprop="thumbnailUrl">
          <meta property="og:title" content="goteacherperu">
          <meta property="og:url" content="https://goteacherperu.com/">
          <meta property="og:site_name" content="MyFacebook">


        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Favicon-->        
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>utilitarios/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>utilitarios/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>utilitarios/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>utilitarios/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>utilitarios/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo base_url(); ?>utilitarios/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>utilitarios/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>utilitarios/img/favicon/favicon.ico" />

        <!--Google, Bing, Yahoo Robots-->
        <title>GRUPO DE ESTUDIO GO TEACHER particulares de estadística DESCRIPTIVA e INFERENCIAL-CALCULO, I, II, III</title>
        <meta name="description" content="Clases particulares de matemática y estadística a domicilio,desde un nivel pre universitario y universitario, tambien se raliza resolucion de tareas">
        <meta name="keywords" content="Profesor de matemática, profesor de estadística, profesor de calculo, profesor pre universitario, profesor universitario, academia para universitarios, asesoría para universitarios, profesor para escolares">

        <!-- MY ESTILO CSS -->
        <link href="<?php echo base_url(); ?>utilitarios/css/estilo.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>utilitarios/css/modern-business.css" rel="stylesheet">
        <?php
        /* Estilos */
        $margintop = "200px";
        $margintop_device = "120px";
        if (isset($menu) && strlen($menu) > 0) {
            switch ($menu) {
                case 'inicio':
                    $margintop_device = "120px";
                    $margintop = "190px";
                    ?>
                    <link href="<?php echo base_url(); ?>utilitarios/css/half-slider.css" rel="stylesheet">
                    <link href="<?php echo base_url(); ?>utilitarios/css/estilo_caja.css" rel="stylesheet">
                    <?php
                    break;
                case 'nosotros':
                    ?>
                    <link href="<?php echo base_url(); ?>utilitarios/css/timeline/timeline.css" rel="stylesheet">
                    <?php
                    break;
                case 'servicios_u':

                case 'servicios_p':

                case 'servicios_e':
                    ?>
                    <link href="<?php echo base_url(); ?>utilitarios/css/estilo_servicios.css" rel="stylesheet">
                    <link href="<?php echo base_url(); ?>utilitarios/css/estilo_caja.css" rel="stylesheet">
                    <?php
                    break;
                case 'informes':
                case 'trabaja':
                    ?>
                    <link href="<?php echo base_url(); ?>utilitarios/css/estilo_contacto.css" rel="stylesheet">
                    <?php
                    break;
                default:
                    break;
            }
        }
        ?>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>utilitarios/css/bootstrap.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>utilitarios/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesnt work if you view the page via file: -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>utilitarios/js/jquery2.1.3.min.js"></script>
        <script>
            

        var baseurl = '<?php echo base_url(); ?>';

        </script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>utilitarios/js/bootstrap.min.js"></script>
        <?php
        /* JavaScript */
        if (isset($menu) && strlen($menu) > 0) {
            switch ($menu) {
                case 'inicio':
                    ?>
                    <script src="<?php echo base_url(); ?>utilitarios/js/jquery.validate.min.js"></script>
                    <script src="<?php echo base_url(); ?>utilitarios/js/js_informes.js"></script>
                    <?php
                    break;
                case 'nosotros':
                    ?>
                    <?php
                    break;
                case 'servicios_u':

                case 'servicios_p':

                case 'servicios_e':
                    ?>
                    <script src="<?php echo base_url(); ?>utilitarios/js/js_pdf.js"></script>
                    <?php
                    break;
                case 'informes':
                    ?>
                    <script src="<?php echo base_url(); ?>utilitarios/js/jquery.validate.min.js"></script>
                    <script src="<?php echo base_url(); ?>utilitarios/js/js_informes.js"></script>
                    <?php
                    break;
                case 'trabaja':
                    ?>
                    <script src="<?php echo base_url(); ?>utilitarios/js/jquery.validate.min.js"></script>
                    <script src="<?php echo base_url(); ?>utilitarios/js/js_trabajaconnosotro.js"></script>
                    <script src="<?php echo base_url(); ?>utilitarios/js/additional-methods.min.js"></script>
                    <?php
                    break;
                default:
                    break;
            }
        }
        ?>

        <!-- Etiqueta global de sitio (gtag.js) de Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'GA_TRACKING_ID');
        </script>
    </head>

    <body id="classbody" class="classbody" <?php if($this->device=="phone") {} else {?> background="<?php echo base_url(); ?>utilitarios/img/fondo/bg.png" <?php } ?> >