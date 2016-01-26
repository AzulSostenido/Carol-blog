<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<?php wp_head(); ?>
  	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link href="<?php bloginfo('template_url'); ?>/css/freelancer.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/fuente.css" rel="stylesheet" type="text/css" />
  
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div class="navbar navbar-default navbar-fixed-top fuente ">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </div>
</header>
<div id="container"class="col-md-12">