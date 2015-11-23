<?php get_header();  ?>

<div class="rightSide">
   <main class="singlePortfolio">
      <div class="wrapper animated fadeIn">

			<div class="singlePortfolioHeader">
				<h4><?php the_title(); ?></h4>
				<p><a href="http://www.amiephipps.com/portfolio">Back to My Work</a></p>
			</div>

			<div class="singleItem">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="singlePortfolioImage">
						<?php while( has_sub_field('images') ): ?>   

							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image['sizes']['large'] ?>" alt="">      
	
						<?php endwhile; ?>
					</div>
					<div class="singlePortfolioContent">
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; // end of the loop. ?>
			</div> <!-- singleItem -->

      </div> <!-- WRAPPER -->
      <?php get_footer(); ?>
   </main> 