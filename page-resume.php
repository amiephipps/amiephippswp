<?php get_header('page');  ?>

<div class="rightSide">
   <main class="about"> 
   	<div class="wrapper">     
			<div class="relative">
		      <h4><?php the_title(); ?></h4>

		      
		      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>     
		      <div class="aboutContent">
		         <p><?php the_content(); ?></p>

		    	  	<?php endwhile; // end the loop?>

		   	   <a href="index.php?page_id=57">Back to about</a>
		      </div>
			</div> <!-- relative -->
	   </div> <!-- wrapper -->
		<?php get_footer(); ?>
   </main> 
   