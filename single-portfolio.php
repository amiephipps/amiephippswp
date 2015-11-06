<?php get_header();  ?>

<div class="rightSide">
   <main class="homepage">
      <div class="wrapper">

         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <p>its working!!!</p>
               
         <?php endwhile; // end of the loop. ?>

      </div> <!-- WRAPPER -->
      <?php get_footer(); ?>
   </main> 