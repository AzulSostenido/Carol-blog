<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
  	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/freelancer.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/fuente.css" rel="stylesheet" type="text/css" />
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
     <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top fuente">
        <div class="containerNav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><img alt="Càrol Ferré" class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/carolferreLogo.png" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll ">
                        <a href="#portfolio">Servicios
                        </a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Especialidades</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contacto!</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!--<div class="btn-group btn-group-justified">
                <ul class="btn-group">
                    <li class="btn">
                        <a href="#"></a>
                    </li>
                    <li class="btn">
                        <a href="#">ESP
                        </a>
                    </li>
                    <li class="btn">
                        <a href="#">ITA</a>
                    </li>
                    <li class="btn">
                        <a href="#">FRA</a>
                    </li>
                   
                </ul>
            </div> -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
<div id="container"class="col-md-12">