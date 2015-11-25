<?php get_header();  ?>

<div class="rightSide">
	<main id="blog">
		<div class="wrapper">
			<h4 class="animated fadeIn">Blog</h4>

			<?php get_template_part( 'loop', 'index' );	?>
			
		</div> <!-- WRAPPER -->
		<?php get_footer(); ?>
</main> 
