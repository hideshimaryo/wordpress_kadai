<?php get_header(); ?>

        <main class="main-area">

          <div class="p-archive-top-view">
            <h2 class="p-archive-top-view__title">Search:<span class="p-archive-top-view__sub-title"><?php the_search_query(); ?></span></h2>
            <div class="p-archive-top-view__mask"></div>
          </div>
          

          
         <section class="p-archive-contents">
          <div class="archive-inner">
            <h3 class="c-archive-heading">小見出しが入ります</h3>
            <p class="c-archive-text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>


<!-- 
            </?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <figure class="p-burger-card">
            <div class="p-burger-card__img">
              </?php if ( has_post_thumbnail() ) : ?>
                </?php the_post_thumbnail(); ?>
                </?php else: ?>
                  <img src="//placehold.jp/700x500.png" alt="">
                  
                  </?php endif; ?>
            </div>
            <figcaption class="p-burger-card__text">
              <h4 class="p-burger-card__title"></?php the_title(); ?></h4>
              </?php the_excerpt(); ?>
                <button class="c-burger-card__button">
                  <a href="</?php the_permalink(); ?>">詳しく見る</a>
                </button>
              </figcaption>
              </figure>
              </?php endwhile; ?>
              </?php else : ?>
                <p class="none-search">検索結果が0件です。<br>別のキーワードで検索してください。</p>
              </?php endif; ?>
              -->

              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <figure class="p-burger-card">
    <div class="p-burger-card__img">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri() . '/images/archive-card.jpg'; ?>" alt="ダミー画像">
      <?php endif; ?>
    </div>
    <figcaption class="p-burger-card__text">
      <h4 class="p-burger-card__title"><?php the_title(); ?></h4>
      <p class="p-burger-card__text__bold">小見出しが入ります</p>
      <p class="p-burger-card__text__normal">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        テキストが入ります。テキストが入ります。</p>
      <button class="c-burger-card__button">
        <a href="<?php the_permalink(); ?>">詳しく見る</a>
      </button>
    </figcaption>
  </figure>

<?php endwhile; endif; ?>
            
          </div>
         </section>

         
         <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

        </main>
      </div>
      
      <?php get_sidebar(); ?>
      
    </div>
    </div>
   <?php get_footer(); ?>