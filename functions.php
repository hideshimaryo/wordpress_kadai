<?php function custom_theme_support() {
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );
    register_nav_menus( array(
      'footer_nav' => esc_html__( 'footer navigation', 'hamburger' ),
      'category_nav' => esc_html__( 'category navigation', 'hamburger' ),
      ) );
      add_theme_support( 'editor-styles' );
      add_editor_style();
    }
    add_action( 'after_setup_theme', 'custom_theme_support' );

    function readScript() {
           wp_enqueue_style(  'reset', get_theme_file_uri( '/css/reset.css' ) , array() );
           wp_enqueue_style(  'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '' );
           wp_enqueue_style(  'mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '' );
           wp_enqueue_style(  'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '' );
           wp_enqueue_style(  'web-font', '//fonts.googleapis.com', array(), '' );
           wp_enqueue_style(  'web-font2', '//fonts.gstatic.com', array(), '' );
           wp_enqueue_style(  'hamburger', get_theme_file_uri( '/css/style.css' ), array() );
           wp_enqueue_style(  'hamburger2', get_theme_file_uri( '/css/editor-style.css' ), array() );
          //  wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.4.min.js', '', '', true );
           wp_enqueue_script( 'bundle', get_theme_file_uri( '/js/main.js' ), 'jquery', true );
          }
          add_action( 'wp_enqueue_scripts', 'readScript' );

        

        //GutenbergにオリジナルのCSSを適用する
add_action('after_setup_theme', 'block_editor_css');
function block_editor_css() {
	add_theme_support('editor-styles');
	add_editor_style('page.css'); //サイトオリジナル
	add_editor_style('css/editor-style.css'); //エディタ専用
}