<?php get_header(); ?>

        <main class="main-area">
        <?php
  $cat = get_the_category();
  $cat = $cat[0];
?>
          <div class="p-archive-top-view">
            <h2 class="p-archive-top-view__title">Menu:<span class="p-archive-top-view__sub-title"><?php echo $cat->name; ?></span></h2>
            <div class="p-archive-top-view__mask"></div>
          </div>
          

          
         <section class="p-archive-contents">
          <div class="archive-inner">
            <h3 class="c-archive-heading">小見出しが入ります</h3>
            <p class="c-archive-text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>

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

         
         <!-- <ul class="p-navigation">
          <li class="p-navigation__item">
            <p class="p-navgation__text">page 1/10</p>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__arrow" href="/pages/1/">
                  <svg xmlns="http://www.w3.org/2000/svg" class="p-navigation__item__link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                  </svg>
              </a>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__item__link isActive" href="/pages/1/"><span>1</span></a>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__item__link " href="/pages/2/"><span>2</span></a>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__item__link" href="/pages/3/"><span>3</span></a>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__item__link" href="/pages/4/"><span>4</span></a>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__item__link" href="/pages/5/"><span>5</span></a>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__item__link" href="/pages/6/"><span>6</span></a>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__item__link" href="/pages/7/"><span>7</span></a>
          </li>
          <li class="p-navigation__item">
              <a class="p-navigation__item__link" href="/pages/8/"><span>8</span></a>
          </li>
          <li class="p-navigation-item">
              <a class="p-navigation__item__link" href="/pages/9/"><span>9</span></a>
          </li>
          <li class="p-navigation-item">
              <a class="p-navigation__arrow right-allow" href="/pages/5/">
                  <svg xmlns="http://www.w3.org/2000/svg" class="p-navigation__item__link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                  </svg>
              </a>
          </li>
      </ul>

      <ul class="p-sp-navigation">
        <li class="p-sp-navigation__item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="p-navigation__item__link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
      </svg>前へ</a></li>
        <li class="p-sp-navigation__item"><a href="#">次へ<svg xmlns="http://www.w3.org/2000/svg" class="p-navigation__item__link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
      </svg></a></li>
      </ul> -->

      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

        </main>
      </div>
      
      <?php get_sidebar(); ?>
      
    </div>
    </div>
   <?php get_footer(); ?>