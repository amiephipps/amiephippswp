<?php get_header('page'); ?>

<div class="rightSide">
   <main class="portfolio">
      <div class="wrapper">
      
         <h4 class="animated slideInDown">My Work</h4>

         <ul class="portfolioItem">

            <?php $portfolio = new WP_query(
               array(
                'post_type' => 'portfolio',
               )
            ) ?>

            <?php if($portfolio -> have_posts()): ?>
               <?php while($portfolio -> have_posts()): $portfolio -> the_post(); ?>
                  <!-- <div class="black"> -->
                     <li class="animated slideInUp">
                        <?php the_post_thumbnail('full'); ?>
                        <a href="<?php the_field('live_link'); ?>" target="_blank">
                           <div class="portfolioSnippet">
                              <h5><?php the_title(); ?></h5>
                              <p><?php the_field('technology_used'); ?></p>
                           </div>
                        </a>
                     </li>
                  <!-- </div> -->
               <?php endwhile; ?>

               <?php wp_reset_postdata(); ?>
            <?php endif; ?>

         </ul>

         <div class="modal" id="terms-of-service" style="display: none">
                 <a href="#" class="close">MODAL BUTTON BOX</a>

                 Terms of service here
         </div>

      </div> <!-- WRAPPER -->
      <?php get_footer(); ?>
   </main>