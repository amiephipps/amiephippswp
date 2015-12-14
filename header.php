<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <?php // Load Meta ?>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php  wp_title('|', true, 'right'); ?></title>
   <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Josefin+Sans:600,700' rel='stylesheet' type='text/css'>
   <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"
    rel="stylesheet" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <?php // Load our CSS ?>
   <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

   <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
   <div id="right"></div>
   <div id="top"></div>
   <div id="bottom"></div>
   <div id="left"></div>
   
   <div class="mainFlexer">
      <div class="leftSide">
         <header class="flexParent">
            <a href="http://www.amiephipps.com"><h2>Amie Phipps.</h2></a>

            <nav>
               <?php wp_nav_menu( array(
               'container' => false,
               'theme_location' => 'primary'
               )); ?>
            </nav>

            <section class="social">
               <p><span><a class="hvr-underline-from-center" href="http://www.twitter.com/amiejoyphipps" target="_blank"><i class="fa fa-twitter"></i></a></span>
               <span><a class="hvr-underline-from-center" href="http://www.linkedin.com/in/amiephipps" target="_blank"><i class="fa fa-linkedin"></i></a></span>
               <span><a class="hvr-underline-from-center" href="http://www.codepen.io/amiephipps" target="_blank"><i class="fa fa-codepen"></i></a></span>
               <span><a class="hvr-underline-from-center" href="http://www.github.com/amiephipps" target="_blank"><i class="fa fa-github-alt"></i></a></span></p>

               <p>Designed &amp; Coded by Amie Phipps &copy; <?php echo date('Y'); ?></p>
            </section>
         </header><!--/.header-->
      </div> <!-- leftSide -->

