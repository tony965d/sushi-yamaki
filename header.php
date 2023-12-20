<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
  </head>

  <?php 
    global $top;
    global $commitment;
    global $menu_page;
    global $news;
    global $information;
  ?>  

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header" class="header">
    <div class="header__inner inner">
      <h1 class="header__logo">
        <a href="<?php echo $top ?>" class="header__image"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/header_logo.png" alt="寿司ヤマキ"></a>
      </h1>
      <div class="header__right">
        <div class="header__contact">
          <a href="<?php echo $information ?>#contact" class="button button--contact">お問い合わせ</a>
        </div>  
        <div class="header__tel">
          <div class="header__tel-icon">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/header_tel-icon.png" alt="">
          </div>
          <a href="tel:0120-681-870" class="header__tel-number">0120-681-870</a>
        </div>
      </div>
      <div class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="header__pc-nav pc-nav">
      <ul class="pc-nav__items">
        <li class="pc-nav__item">
          <a href="<?php echo $commitment ?>" class="pc-nav__menu">
            <div class="pc-nav__title">こだわり</div>
          </a>    
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo $menu_page ?>" class="pc-nav__menu">
            <div class="pc-nav__title">お品書き</div>
          </a>    
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo $news ?>" class="pc-nav__menu">
            <div class="pc-nav__title">新着情報</div>
          </a>    
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo $information ?>" class="pc-nav__menu">
            <div class="pc-nav__title">店舗情報</div>
          </a>  
        </li>
      </ul>
    </nav>
    <nav class="header__sp-nav sp-nav js-sp-nav">
      <div class="sp-nav__inner inner">
        <div class="sp-nav__wrapper">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="<?php echo $top ?>" class="sp-nav__menu">TOP</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $commitment ?>" class="sp-nav__menu">こだわり</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $menu_page ?>" class="sp-nav__menu">お品書き</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $news ?>" class="sp-nav__menu">新着情報</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $information ?>" class="sp-nav__menu">店舗情報</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo $information ?>#contact" class="sp-nav__menu">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>



  