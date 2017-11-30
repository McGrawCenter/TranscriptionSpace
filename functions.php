<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */




function seadragon_scripts()
{
    wp_register_script( 'openseadragon', get_template_directory_uri().'/js/openseadragon/openseadragon.min.js');
    wp_enqueue_script( 'openseadragon' );
}
add_action( 'wp_enqueue_scripts', 'seadragon_scripts' );





function embed_openseadragon_of_featured_image( ) {
if ( has_post_thumbnail() ) {
    $featured_img_id = get_post_thumbnail_id();
    $featured_img_url = wp_get_attachment_image_src($featured_img_id,'full', true);

    $url = $featured_img_url[0];
    $path = get_template_directory_uri().'/js/openseadragon/images/';

    $str = '<div id="openseadragon1" style="height:800px;width:100%;background:black;"></div>';
    $str .= '	<script type="text/javascript">';
    $str .= '	var viewer = OpenSeadragon({';
    $str .= '	id: "openseadragon1",';
    $str .= '	defaultZoomLevel: 3,';

    $str .= '	prefixUrl: "'.$path.'",';
    $str .= '	tileSources: {';
    $str .= '	type: "image",';
    $str .= '	url:  "'.$url.'"';
    $str .= '	}';
    $str .= '});';
    $str .= '</script>';

return $str;
}
else {
  return "Please add a featured image to this page or post";
}

}
add_shortcode( 'openseadragon_featured_image', 'embed_openseadragon_of_featured_image' );




function transcription_process_post() {
	if(isset($_POST['savetranscription']) && isset($_POST['pid'])) {
	  update_post_meta( $_POST['pid'], 'transcription', $_POST['transcription'] );
	  update_post_meta( $_POST['pid'], 'translation', $_POST['translation'] );
	}
}

add_action( 'init', 'transcription_process_post' );










//Drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );
register_nav_menu( 'secondary', 'Secondary Menu' );


//This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );


add_theme_support( 'custom-header', array(
		// Header image default
		'default-image' => trailingslashit( get_template_directory_uri() ) . 'images/logo.png',
		// Header text display default
		'header-text' => false,
		// Header text color default
		'default-text-color' => '000',
		// Flexible width
		'flex-width' => true,
		// Header image width (in pixels)
		'width' => 300,
		// Flexible height
		'flex-height' => true,
		// Header image height (in pixels)
		'height' => 80
	) );

//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
add_filter( 'widget_text', 'do_shortcode' );

//Widget support for a right sidebar
register_sidebar( array(
	'name' => 'Sidebar',
	'id' => 'sidebar',
	'description' => 'Widgets in this area will be shown on the right-hand side.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Widget support for the footer
register_sidebar( array(
	'name' => 'Footer Left',
	'id' => 'footer-left',
	'description' => 'Widgets in this area will be shown in the first column of the footer.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));
register_sidebar( array(
	'name' => 'Footer Middle',
	'id' => 'footer-middle',
	'description' => 'Widgets in this area will be shown in the second column of the footer.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));
register_sidebar( array(
	'name' => 'Footer Right',
	'id' => 'footer-right',
	'description' => 'Widgets in this area will be shown in the third column of the footer.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Enqueue_styles
if ( ! function_exists( 'annospace_load_styles' ) ) {
function annospace_load_styles() {

	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/style.css');
	/*wp_register_style( 'skeleton-base', get_template_directory_uri() . '/css/skeleton.css');
	wp_register_style( 'skeleton-normalize', get_template_directory_uri() . '/css/normalize.css');*/
	wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css');

	wp_enqueue_style( 'skeleton-base' );
	wp_enqueue_style( 'skeleton-style' );
	wp_enqueue_style( 'skeleton-layout' );
	wp_enqueue_style( 'custom' );




	wp_register_script( 'annospace', get_template_directory_uri().'/js/annotationspace.js', array('jquery'),'1.1', true );
	$sitedata = array( 'siteurl' => get_site_url());
	wp_localize_script( 'annospace', 'sitevars', $sitedata );
	wp_enqueue_script('annospace');

}
add_action('wp_enqueue_scripts', 'annospace_load_styles');
} // endif




