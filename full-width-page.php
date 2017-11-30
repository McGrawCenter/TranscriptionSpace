<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Skeleton
 */

get_header(); 
?>
<?php
if ( has_post_thumbnail() ) {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
    $img = $thumb_url[0];
    $bgstyle = 'style="background-color:rgba(0, 0, 0, 1);background: url('.$img.') no-repeat center center fixed;background-size: cover;"';

}
?>

<section id="main-section-title" <?php echo $bgstyle;?>>
  <div class="container">
    <div class="row">
     <div class="twelve columns alpha">

		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

     </div> 
    </div>
  </div>   
</section>
<section id="main-section">
  <div class="container">
    <div class="row">
     <div class="twelve columns alpha">
	<?php the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'WP-Skeleton' ) . '&after=</div>' ); ?>
			<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->

	<?php comments_template( '', true ); ?>
     </div> 

    </div>
  </div>   
</section>
                
<?php get_footer(); ?>
