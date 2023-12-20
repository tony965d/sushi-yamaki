<?php get_header(); ?>
  
  <main>
    <section class="mv">
      <div class="mv__wrapper">
        <picture class="mv__image">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv.jpg" alt="">
        </picture>
        <div class="mv__body">
          <div class="mv__inner inner">
            <div class="mv__body-wrapper">
              <div class="mv__body-image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-body.jpg" alt="">
              </div>
              <h2 class="mv__title">
                熟練した職人の目利きを<br>
                活かして仕入れた新鮮な<br>
                素材をご賞味ください
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="news">
      <div class="news__header news-header">
        <div class="news-header__inner inner">
          <h2 class="news-header__title">新着情報</h2>
        </div>
      </div>
      <div class="news__body">
        <div class="news__inner inner">
          <div class="news__cards cards">
            <a href="#" class="cards__card card">
              <figure class="card__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/news-card1.jpg" alt="">
              </figure>
              <div class="card__header">
                <time datetime="<?php the_time('c'); ?>" class="card__date">2023.10.5</time>
                <p class="card__title">旬のランチ始まります</p>
              </div>
            </a>
            <a href="#" class="cards__card card">
              <figure class="card__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/news-card2.jpg" alt="">
              </figure>
              <div class="card__header">
                <time datetime="<?php the_time('c'); ?>" class="card__date">2023.10.3</time>
                <p class="card__title">営業時間変更のお知らせ</p>
              </div>
            </a>
            <a href="#" class="cards__card card">
              <figure class="card__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/news-card3.jpg" alt="">
              </figure>
              <div class="card__header">
                <time datetime="<?php the_time('c'); ?>" class="card__date">2023.10.1</time>
                <p class="card__title">〇〇入荷のお知らせ</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="news__button">
        <a href="#" class="button button--news">一覧へ</a>
      </div>
    </section>

    <section class="menu">
      <div class="menu__container">
        <div class="menu__inner inner">
          <div class="menu__wrapper">
            <div class="menu__image"></div>
            <div class="menu__contents">
              <div class="menu__body">
                <div class="menu__icon">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/menu_icon.png" alt="寿司">
                </div>
                <h2 class="menu__sub-title">
                  金沢や豊洲からの<br>
                  直送を始めとした<br>
                  新鮮で旬なネタを<br>
                  ご用意しております。
                </h2>
              </div>
              <div class="menu__button">
                <a href="#" class="button button--menu">お品書きへ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pickup">
      <div class="pickup__inner inner">
        <div class="pickup__block unit-block">
          <div class="unit-block__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/pickup.jpg" alt="">
          </div>
          <div class="unit-block__body">
            <div class="unit-block__text">
              「今日はお寿司にしよう」<br>
              ご家族で楽しむ至福のひと時<br>
              寿司やまきのこだわりで<br>
              仕上げた寿司の数々を<br>
              ご堪能ください。
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="commitment">
      <div class="commitment__inner inner">
        <div class="commitment__header commitment-header">
          <h2 class="commitment-header__title">こだわりの醤油、味噌</h2>
          <p class="commitment-header__sub-title">創業120年醤油屋喜代治商店の名水醤油を使用</p>
        </div>
        <div class="commitment__images">
          <div class="commitment__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/commitment1.jpg" alt="">
          </div>
          <div class="commitment__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/commitment2.jpg" alt="">
          </div>
        </div>
        <div class="commitment__button">
          <a href="#" class="button">詳しくはこちら</a>
        </div>
      </div>
    </section>

    <section class="information">
      <div class="information__inner inner">
        <div class="information__block inner">
          <div class="information__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/information.jpg" alt="">
          </div>
          <div class="information__body">
            <p class="information__text">
              当店は創業120年の醬油屋が運営する寿司屋です。お取引企業様やお客様、
              地域の方々のおかげで開業20年を迎えることができ、改めて感謝申し上げます。<br>
              ヤマキ醤油の「家庭の味、地域の味を作る」という志を大切に、
              家族や友人との楽しくかけがえのない時間を過ごして頂ける場所として地域に愛される寿司屋を目指していきます。
              当社自慢の醤油、味噌、すし酢を使ったお寿司を是非ご賞味下さい。
            </p>
            <div class="information__ceo">代表取締役　江竜　拓児</div>
          </div>
        </div>
      </div>
      <div class="information__company">
        <div class="information__map inner">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.9392506400136!2d136.27956807478446!3d35.38196267268526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6002293412cbc971%3A0xc87d3e11acc6c715!2z5a-_5Y-444KE44G-44GN!5e0!3m2!1sja!2sjp!4v1700735517201!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="information__logo-area logo-area">
          <div class="logo-area__inner inner">
            <div class="logo-area__image">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/logo-area.png" alt="寿司ヤマキ">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>