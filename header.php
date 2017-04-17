<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
   
      </div>
  
    </div>
  </div>
    </nav>
    <div id="main-container">
    <div class="container" style="padding-top: 60px; padding-bottom: 60px;" >
    <div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
  <center><img class="img-responsive" src="http://driftikharmemorial.com/wp-content/uploads/2017/04/Banner1.png"></center>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <center><img class="img-responsive" src="http://driftikharmemorial.com/wp-content/uploads/2017/04/banner2.png"></center>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12">
  <center><img class="img-responsive" src="http://driftikharmemorial.com/wp-content/uploads/2017/04/banner3.png"></center>
  </div>
    </div>
           </div>