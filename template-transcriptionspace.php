<?php
/**
 * Template Name: Transcription Page
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Skeleton
 */

get_header(); 
?>
<section id="main-section">
  <div class="container">
    <div class="row">

		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
    </div>




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

    </div> <!-- /row -->








    <div class="row">
     <div class="seven columns alpha" id="leftcolumn">

       <?php echo do_shortcode( '[openseadragon_featured_image]' ); ?>

     </div> 



     <div class="five columns" id="rightcolumn">
	<form name='transcription' action='' method='POST'>
	<input type="hidden" name="savetranscription" value="1"/>
	<input type="hidden" name="pid" value="<?php the_ID(); ?>"/>
	<p style='margin-bottom:2px;'><button id='choosetranscription'>Transcription</button> <button id='choosetranslation'>Translation</button></p>
	<textarea id='transcription' name='transcription'><?php echo get_metadata('post', get_the_ID(), 'transcription', true); ?></textarea>
	<textarea id='translation' name='translation' style='display:none'><?php echo get_metadata('post', get_the_ID(), 'translation', true); ?></textarea>
	<input type="submit" value="Save"/>
	</form>
     </div> 
    </div> <!-- /row -->





  </div>   
</section>
                
<?php get_footer(); ?>
