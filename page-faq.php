<?php get_header();  ?>

<div class="rightSide">
   <main class="faq"> 
   	<div class="wrapper">     
			<h4 class="animated fadeIn"><?php the_title(); ?></h4>
			<section class="aboutContent animated fadeIn">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>     
					<?php the_content(); ?>
				<?php endwhile; // end the loop?>
			</section>

			<section id="faq">
				<?php while( has_sub_field('qanda') ): ?>
			  		<h6><?php the_sub_field('question'); ?></h6>
			  		<div>
			  			<p><?php the_sub_field('answer'); ?></p>	
					</div>
				<?php endwhile; ?>
			</section>
	   </div> <!-- wrapper -->
		<?php get_footer(); ?>
   </main> 