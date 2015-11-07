<?php get_header();  ?>

<div class="rightSide">
   <main class="homepage">
      <div class="wrapper">

         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
         	<?php while( has_sub_field('images') ): ?>   

         		<?php $image = get_sub_field('image'); ?>
         		<img src="<?php echo $image['sizes']['large'] ?>" alt="">      

         	<?php endwhile; ?>
            <p><?php the_content(); ?></p>
               
         <?php endwhile; // end of the loop. ?>

      </div> <!-- WRAPPER -->
      <?php get_footer(); ?>
   </main> 