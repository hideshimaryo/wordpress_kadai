<footer class="l-footer">
    <div class="l-footer__img"></div>
    <!-- <ul class="l-footer__menu">
      <li class="l-footer__item"><a href="#">ショップ情報</a></li>
      <li class="l-footer__item"><a href="#">ヒストリー</a></li>
    </ul> -->
    <?php wp_nav_menu( array('menu' => 'footermenu',
        'menu_class' => 'l-footer__menu',
        'menu_item_class' => 'l-footer__item')); ?>
    <small class="c-copyright">Copyright:RaiseTech</small>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>