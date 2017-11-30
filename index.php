<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
 
get_header();  //the Header
?>
<section id="main-section">
  <div class="container">
    <div class="row">
     <div class="two-thirds column alpha">
         <?php get_template_part( 'loop', 'index' ); //the Loop ?>
     </div> 
     <div class="one-third column">
         <?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
     </div>
    </div>
  </div>   
</section>


   <?php get_footer(); //the Footer ?>

           
