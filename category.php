<?php get_header();  ?>

<div class="rightSide">
   <main id="category">
      <div class="wrapper">
         <h4><?php single_cat_title(); ?></h4>
         <?php
         $category_description = category_description();
         if ( ! empty( $category_description ) )
         echo '' . $category_description . '';
         get_template_part( 'loop', 'category' );
         ?>

         </div> <!-- WRAPPER -->
      <?php get_footer(); ?>
   </main> 
