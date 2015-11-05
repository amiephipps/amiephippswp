<?php get_header();  ?>

<div class="rightSide">
   <main class="homepage">
   	<div class="wrapper">

	      <h1><?php the_field('main_header'); ?></h1>

			<div class="typewriter">
	      	<span><del>A Web Developer.<ins>1</ins></del><del>A Designer.<ins>2.5</ins></del><del>A Freelancer.<ins>2.5</ins></del><del>A Dog Lover.<ins>2.5</ins></del></span>
			</div> <!-- typewriter -->

	      <p><?php the_field('main_description'); ?></p>

	      <div class="flexParent">
	         <a href="http://localhost:3000/amiephipps/portfolio/">See My Work</a>
	         <a href="#contact" class="smoothScroll">Contact Me</a>
	      </div>

		</div> <!-- WRAPPER -->
 		<?php get_footer(); ?>
   </main> 
