
jQuery(function($){
$(function(){
	$('.js-hamburger').on('click', function() {
    $('.l-sidebar').toggleClass('is-open');
    $('.p-hamburger__mask').toggleClass('is-open');
    $('body').toggleClass('is-open');
    $('.l-sidebar__menu-list').toggleClass('is-open');
  });

  // #maskのエリアをクリックした時にメニューを閉じる
  $('.p-hamburger__mask').on('click', function() {
    $('.l-sidebar').toggleClass('is-open');
    $('.p-hamburger__mask').toggleClass('is-open');
  });

  // リンクをクリックした時にメニューを閉じる
  $('.l-sidebar__close').on('click', function() {
    $('.l-sidebar').removeClass('is-open');
    $('.p-hamburger__mask').removeClass('is-open');
  });
});
});


