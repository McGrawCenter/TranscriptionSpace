<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->

    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas
  	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

	<!-- Stylesheets
	================================================== -->



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><!-- the Body  -->

<?php
$headerImg = get_header_image();
if( !empty( $headerImg ) ) { 
?>
<style>
#header {
  background: url(<?php echo $headerImg; ?>); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
<?php
 }
?>

<section id="header-section">

  <div class="container" id="header">
     <div class="six columns"> 
        <div class="logo">
            <h1 class='site-title'><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name');?></a></h1>
        </div>
    </div> 
    <div class="six columns" id="topnav">
    <!--  the Menu -->
    <?php if(has_nav_menu( 'primary' )) { wp_nav_menu( array( 'theme_location' => 'primary' ) ); } ?>
    </div> 

</div>
</section>

<section id="nav-section">
<div id="nav">
  <div class="container">
    <div class="twelve columns secondary-menu"> 
    <!--  the Menu -->
    <?php if(has_nav_menu( 'secondary' )) { wp_nav_menu( array( 'theme_location' => 'secondary' ) ); } ?>
    </div> 
  </div>
</div>
</section>



