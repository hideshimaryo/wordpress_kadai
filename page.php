<?php get_header(); ?>

        <main class="main-area">

          <div class="p-page-fv">
            <h2 class="p-single-fv__title">ショップについて</h2>
          </div>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
          <div class="p-single-page l-single-page">
            <div class="l-single-inner">
              <?php the_content(); ?>
          
              
            </div>  <!-- ----/inner -->
            
          </main>
        </div>
        <?php endwhile; endif; ?>
      
      <?php get_sidebar(); ?>
      
    </div>
    </div>

<?php get_footer(); ?>