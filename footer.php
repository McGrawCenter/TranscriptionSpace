<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
<section id="footer-section">
  <div class="container">
    <div class="row">
        <div class="four columns">
            <?php if ( is_active_sidebar( 'footer-left' ) ) : ?> <?php dynamic_sidebar( 'footer-left' ); ?>
	        <?php endif; ?> 
        </div>
        <div class="four columns">
            <?php if ( is_active_sidebar( 'footer-middle' ) ) : ?> <?php dynamic_sidebar( 'footer-middle' ); ?>
	        <?php endif; ?> 
        </div>
        <div class="four columns">
            <?php if ( is_active_sidebar( 'footer-right' ) ) : ?> <?php dynamic_sidebar( 'footer-right' ); ?>
	        <?php endif; ?> 
         </div>
     </div>
  </div>   
</section>
                          
<?php wp_footer(); ?>
   
</body>
</html>
