<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="flex-box">
    <div class="l-main-contents">
      <header class="l-header">
        <div class="l-header-inner">
          <h1 class="l-header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hamburger</a></h1>
          <div class="p-search-container">
            <?php get_search_form(); ?>
          </div>
        </div>
        <button class="p-hamburger js-hamburger">
          Menu
        </button>
        <div class="p-hamburger__mask"></div>
      </header>