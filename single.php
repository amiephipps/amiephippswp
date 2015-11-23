<?php get_header();  ?>

<div class="rightSide">
   <main id="singleBlog">
      <div class="wrapper singleBlog">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div class="thePost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <h4 class="entry-title"><?php the_title(); ?></h4>

               <p><?php the_date(); ?><?php the_tags('Tags: ', ', ', '<br>'); ?> ■ <?php the_category(', '); ?></p>

               <?php the_post_thumbnail('lar'); ?>
               <div class="entry-content">
                  <?php the_content(); ?>
                  <?php wp_link_pages(array(
                  'before' => '<div class="page-link"> Pages: ',
                  'after' => '</div>'
                  )); ?>
               </div><!-- .entry-content -->

               <div class="entry-meta">
                  <?php hackeryou_posted_on(); ?>
               </div><!-- .entry-meta -->
            </div><!-- #post-## -->

            <div id="nav-below" class="navigation">
               <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
               <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
            </div><!-- #nav-below -->

            <?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>
      </div> <!-- WRAPPER -->
      <?php get_footer(); ?>
   </main> 
