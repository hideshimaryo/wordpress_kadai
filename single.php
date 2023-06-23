<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<main class="main-area">
  
  <div class="p-single-top-view">
    <h2 class="p-single-top-view__title"><?php the_title(); ?></h2>
  </div>
  <?php the_content(); ?>
  
</main>
</div>

<?php get_sidebar(); ?>

</div>
</div>
<?php endwhile; endif; ?>


  <?php get_footer(); ?>