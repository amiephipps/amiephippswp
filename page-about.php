<?php get_header('page');  ?>

<div class="rightSide">
   <main class="about"> 
   	<div class="wrapper">     
			<div class="relative">
		      <h4><?php the_title(); ?></h4>

		      <div class="aboutImage">
		      	<?php the_post_thumbnail('medium'); ?>
		      </div>
		      
		      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>     
		      <div class="aboutContent">
		         <p><?php the_content(); ?></p>
		      </div>
		      <?php endwhile; // end the loop?>
			</div> <!-- relative -->
	   </div> <!-- wrapper -->
		<?php get_footer(); ?>
   </main> 
   