<?php get_header('page');  ?>

<div class="rightSide">
   <main class="about"> 
   	<div class="wrapper">     
			<div class="relative">
		      <h4 class="slideInDown"><?php the_title(); ?></h4>

		      <div class="aboutImage slideInRight">
		      	<?php the_post_thumbnail('medium'); ?>
		      </div>
		      
		      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>     
		      <div class="aboutContent slideInRight">
		         <p><?php the_content(); ?></p>

		    	  	<?php endwhile; // end the loop?>

		   	   <a href="index.php?page_id=57">See My Resume</a>
		      </div>
			</div> <!-- relative -->
	   </div> <!-- wrapper -->
		<?php get_footer(); ?>
   </main> 
   