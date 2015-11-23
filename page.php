<?php get_header();  ?>

<div class="rightSide">
   <main class="homepage" id="homepage">
   	<div class="wrapper">

	      <h1><?php the_field('main_header'); ?></h1>

			<div class="typewriter">
	      	<span><del>Web Developer.<ins>2</ins></del><del>Designer.<ins>2</ins></del><del>Freelancer.<ins>2</ins></del><del>Dog Lover.<ins>2</ins></del></span>
			</div> <!-- typewriter -->

	      <p class="homepageParagraph"><?php the_field('main_description'); ?></p>

	      <div class="homepageButtons">
	         <a href="http://amiephipps.com/portfolio/">See My Work</a>
	         <a href="#contact" class="smoothScroll">Contact Me</a>
	      </div>

		</div> <!-- WRAPPER -->
 		<?php get_footer(); ?>
   </main> 
