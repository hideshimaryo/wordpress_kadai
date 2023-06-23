<form action="<?php bloginfo('url'); ?>" method="post">
    <input id="s" action="<?php echo esc_url( home_url( '/' ) ); ?>" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="&#xf002;" />
    <input type="submit" name="submit" value="検索" id="searchsubmit">
</form>