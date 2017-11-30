<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
  <div class="header">  
    
    <div class="sixteen columns"> 
        <div class="logo">
            <h1><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name');?></a></h1>
        </div>
    </div> 

    <div class="sixteen columns"> 
    <!--  the Menu -->
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </div> 
   
</div> <!--  End blog header -->
   
