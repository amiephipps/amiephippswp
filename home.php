<?php get_header();  ?>

<div class="rightSide">
	<main class="blog" id="blog">
		<div class="wrapper">
			<h4 class="animated fadeIn">Blog</h4>

			<?php get_template_part( 'loop', 'index' );	?>

			<?php //get_sidebar(); ?>
		

			<aside>
			   <?php get_sidebar(); ?>
			</aside>
		</div> <!-- WRAPPER -->
		<?php get_footer(); ?>
</main> 
