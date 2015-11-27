<?php get_header();  ?>

<div class="rightSide">
   <main class="homepage" id="homepage">
   	<div class="wrapper">
			<div class="typewriter">
	      	<span><del>Web Developer.<ins>2</ins></del><del>Designer.<ins>2</ins></del><del>Freelancer.<ins>2</ins></del><del>Dog Lover.<ins>2</ins></del></span>
			</div> <!-- typewriter -->
			<section class="homepageContentFlexer">
	      	<div class="homepageImage">
	      		<?php the_post_thumbnail('blogImage'); ?>
	      	</div> 
	      	<p class="homepageParagraph"><?php the_field('main_description'); ?></p>
			</section>

	      <section class="homepageButtons">
	         <a href="http://amiephipps.com/services/">Work With Me</a>
	         <a href="#contact" class="smoothScroll">Contact Me</a>
	      </section>

	      <section class="homepageWork">
	      	<div>
	      		<h5>Recent Work</h5>
	      		<p>Here are some of my latest projects...</p>
	      		<a href="http://www.amiephipps.com/portfolio">See all work...</a>
	      	</div>
	      	<div>
	      		<?php $portfolio = new WP_query(
	      		   array(
	      		    'post_type' => 'portfolio',
	      		    'posts_per_page' => '3'
	      		   )
	      		) ?>

	      		<?php if($portfolio -> have_posts()): ?>
	      		   <?php while($portfolio -> have_posts()): $portfolio -> the_post(); ?>
	      		         <div class="animated fadeIn">
	      		            <div class="portfolioItem">
	      		               <div class="portfolioImage">
	      		                  <?php the_post_thumbnail('portfolio'); ?>
	      		               </div>
	      		               <div class="portfolioContent">
	      		                  <p><?php the_field('description'); ?></p>
	      		                  <a href="<?php the_field('live_link'); ?>" target="_blank">View Live Site</a>
	      		                  <a href="<?php the_permalink(); ?>">Read More...</a>
	      		               </div> <!-- portfolio content -->
	      		            </div> <!-- portfolio image -->
	      		            <h5><?php the_title(); ?></h5>
	      		            <h6><?php the_field('technology_used'); ?></h6>
	      		         </div>
	      		   <?php endwhile; ?>

	      		   <?php wp_reset_postdata(); ?>
	      		<?php endif; ?>	      	
	      	</div>
	      </section>
      	<section class="homepageBlog">
      		<div>
      			<h5>Recent Posts</h5>
      			<p>Here you can find some of my latest posts...</p>
      			<a href="http://www.amiephipps.com/blog">See all posts...</a>
      		</div>
      		<div>
					<?php
					 	global $post;
					 	$myposts = get_posts('numberposts=3');
						foreach($myposts as $post) :
					 ?>

   					<article class="homepageEntry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   						<section class="blogImage animated fadeIn">
   							<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
   								<?php the_post_thumbnail('portfolio'); ?>
   							</a>
   						</section>

   						<section class="blogContent animated fadeIn">
					        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
					          <?php the_title(); ?>...
					        </a>
   						</section> <!-- blogContent -->
   					</article><!-- #post-## -->

					 <?php endforeach; ?>
      		</div>
      	</section>

		</div> <!-- WRAPPER -->
 		<?php get_footer(); ?>
   </main> 
