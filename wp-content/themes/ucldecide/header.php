<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title ><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Le styles -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
		<?php wp_enqueue_script("jquery"); ?>

		<?php wp_head(); ?>
	</head>
	
<body>
	
   <div id="wrapper">
	
	<div id="ucl_header" class="container">
  			<img id="uclLogo" src="<?php echo get_option('home'); ?>/wp-content/themes/ucldecide/images/UCL_logo.svg" />
    </div>
    
    <div id="mainMenu" class="menu">
    <!-- Fixed navbar -->
    <nav id="navigationBar" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="homeButton" class="navbar-brand" href="<?php echo get_option('home'); ?> "><img id="decideLogo"src="<?php echo get_option('home'); ?>/wp-content/themes/ucldecide/images/Welcome_UCL_logo.svg" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php /* Primary navigation */
							wp_nav_menu( array(
							  'menu' => 'top_menu',
							  'depth' => 2,
							  'container' => false,
							  'menu_class' => 'nav navbar-nav',
							  //Process nav menu using our custom nav walker
							  'walker' => new wp_bootstrap_navwalker())
							);
							?>
							
        </div><!--/.nav-collapse -->
        <div id="blackReactangle"></div>
      </div>
    </nav>
   </div>
  	   
<!-- index php -->

  
