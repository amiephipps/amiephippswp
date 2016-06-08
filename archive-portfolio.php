<?php get_header(); ?>

<div class="rightSide">
   <main class="portfolio">
      <div class="wrapper">
      
         <h4 class="animated fadeIn">My Work</h4>

         <ul class="portfolioItems">

            <?php $portfolio = new WP_query(
               array(
                'post_type' => 'portfolio',
               )
            ) ?>

            <?php if($portfolio -> have_posts()): ?>
               <?php while($portfolio -> have_posts()): $portfolio -> the_post(); ?>
                     <li class="animated fadeIn">
                        <div class="portfolioItem">
                           <div class="portfolioImage">
                              <?php the_post_thumbnail('portfolio'); ?>
                           </div>
                           <div class="portfolioContent">
                              <p><?php the_field('description'); ?></p>
                              <a href="<?php the_field('live_link'); ?>" target="_blank">View Live Site</a>
                           </div> <!-- portfolio content -->
                        </div> <!-- portfolio image -->
                        <h5><?php the_title(); ?></h5>
                        <h6><?php the_field('technology_used'); ?></h6>
                     </li>
               <?php endwhile; ?>

               <?php wp_reset_postdata(); ?>
            <?php endif; ?>

         </ul>

      </div> <!-- WRAPPER -->
      <?php get_footer(); ?>
   </main>