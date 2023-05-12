<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>


  <?php wp_head(); ?>
</head>

<body>
  <div class="flex-box">
    <div class="l-main-contents">
      <header class="l-header">
        <div class="l-header-inner">
          <h1 class="l-header-title">Hamburger</h1>
          <div class="p-search-container">
            <form action="#" method="post">
              <input type="text" name="search" value="" placeholder="&#xf002;" />
              <input type="submit" name="submit" value="検索">
            </form>
          </div>
        </div>
        <button class="p-hamburger js-hamburger">
          Menu
        </button>
        <div class="p-hamburger__mask"></div>
      </header>