  <?php 
    global $top;
    global $commitment;
    global $menu_page;
    global $news;
    global $information;
  ?>  

  <footer id="footer" class="footer top-footer">
    <div class="footer__container">
      <div class="footer__inner inner">
        <div class="footer__block">
          <div class="footer__block-info">
            <div class="footer__address">
              <div class="footer__postal-code">〒526-0031</div>
              <div class="footer__address-line">滋賀県長浜市八幡東町２２２</div>
            </div>
            <div class="footer__tel">
              <div class="footer__tel-icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/footer_tel-icon.png" alt="">
              </div>
              <a href="tel:0120-681-870" class="footer__tel-number">0120-681-870</a>
            </div>
          </div>  
          <nav class="footer__nav footer-nav">
            <ul class="footer-nav__items">
              <div class="footer-nav__two-column">
                <li class="footer-nav__item">
                  <a href="<?php echo $top ?>" class="footer-nav__menu">トップ</a>
                </li>
                <li class="footer-nav__item">
                  <a href="<?php echo $commitment ?>" class="footer-nav__menu">こだわり</a>
                </li>
              </div>
              <div class="footer-nav__two-column">
                <li class="footer-nav__item">
                  <a href="<?php echo $menu_page ?>" class="footer-nav__menu">お品書き</a>
                </li>
                <li class="footer-nav__item">
                  <a href="<?php echo $news ?>" class="footer-nav__menu">新着情報</a>
                </li>
              </div>
              <div class="footer-nav__two-column">
                <li class="footer-nav__item">
                  <a href="<?php echo $information ?>" class="footer-nav__menu">店舗情報</a>
                </li>
                <li class="footer-nav__item u-mobile">
                  <a href="<?php echo $information ?>#contact" class="footer-nav__menu">お問い合わせ</a>
                </li>
              </div>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="footer__bg">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/footer_bg-black.jpg" alt="">
    </div>
    <div class="footer__copyright">
      <small>Copyright (c)  sushi yamaki. All Rights Reserved.</small>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>