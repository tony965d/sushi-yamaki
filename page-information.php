<?php get_header(); ?>

  <section class="mv-sub">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image js-mv-sub">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_information.jpg" alt="">
      </picture>
    </div>
  </section>

  <section class="information-store">
    <div class="information-store__inner inner">
      <div class="information-store__container">
        <div class="information-store__information-section-header information-section-header hidden js-fadeUp">
          <h2 class="information-section-header__title">店舗情報 </h2>
        </div>
        <div class="information-store__block unit-block unit-block--store">
          <div class="unit-block__image hidden js-fadeLeft">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/store1.jpg" alt="">
          </div>
          <div class="unit-block__body hidden js-fadeUp">
            <div class="unit-block__text">
              寿司やまきはおいしいに欠かせない<br>
              それらの時間や手間を<br>
              いっさい惜しみません。<br>
              真似のできないこだわり。<br>
              とびきり新鮮なネタをご用意して<br>
              皆様のお越しをお待ちしております。
            </div>
          </div>
        </div>
        <div class="information-store__images js-fadeUp">
          <div class="information-store__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/store2.jpg" alt="">
          </div>
          <div class="information-store__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/store3.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="information-store__container">
        <div class="information-store__information-section-header information-section-header js-fadeUp">
          <h2 class="information-section-header__title">店舗地図 </h2>
        </div>
        <div class="information-store__area">
          <div class="information-store__map js-fadeUp">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.9392506400136!2d136.27956807478446!3d35.38196267268526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6002293412cbc971%3A0xc87d3e11acc6c715!2z5a-_5Y-444KE44G-44GN!5e0!3m2!1sja!2sjp!4v1701055000207!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="information-store__unit">
          <dl class="information-store__unit-contents definition-contents">
            <div class="definition-contents__item definition-item js-fadeUp">
              <dt class="definition-item__name">寿司　やまき</dt>
            </div>
            <div class="definition-contents__item definition-item js-fadeUp">
              <dt class="definition-item__name">電話番号</dt>
              <dd class="definition-item__text">0120-68-1870</dd>
            </div>
            <div class="definition-contents__item definition-item js-fadeUp">
              <dt class="definition-item__name">所在地</dt>
              <dd class="definition-item__text">
                〒526-0031<br>
                滋賀県長浜市八幡東町222
              </dd>
            </div>
            <div class="definition-contents__item definition-item js-fadeUp">
              <dt class="definition-item__name">営業時間</dt>
              <dd class="definition-item__body">
                <dl class="definition-item__date">
                  <dt class="definition-item__date-title">ランチ</dt>
                  <dd class="definition-item__date-time">
                    平日11:30〜14:00<br>
                    休日11:00〜14:00
                  </dd>
                </dl>
                <dl class="definition-item__date">
                  <dt class="definition-item__date-title">ディナー</dt>
                  <dd class="definition-item__date-time">17:00〜21:00</dd>
                </dl>
              </dd>
            </div>
            <div class="definition-contents__item definition-item js-fadeUp">
              <dt class="definition-item__name">定休日</dt>
              <dd class="definition-item__text">木曜日（元日）</dd>
            </div>
            <div class="definition-contents__item definition-item js-fadeUp">
              <dt class="definition-item__name">別店舗</dt>
              <dd class="definition-item__text">
                <a href="http://yamakisyouyu.jp/" target="_blank">ヤマキ醤油</a>
              </dd>
            </div>
          </dl>
          <div class="information-store__unit-image js-fadeLeft">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/store4.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="information-contact">
    <div class="information-contact__inner inner">
      <div class="information-contact__information-section-header information-section-header js-fadeUp">
        <h2 class="information-section-header__title">お問い合わせ </h2>
      </div>
      <div class="information-contact__form">
        <div class="information-contact__form-header">
          <h3 class="information-contact__form-title js-fadeUp">お問い合わせフォーム</h3>
          <p class="information-contact__form-subtitle js-fadeUp">
            下記フォームにご記入の上、<span class="u-mobile"><br></span>「送信確認」ボタンを押してください。<span class="u-mobile"><br></span>内容確認後、折り返し、ご連絡させて頂きます。
          </p>
        </div>
        <div class="information-contact__form-wrapper">
          <div class="information-contact__form-body contact-form js-fadeUp">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php echo do_shortcode('[contact-form-7 id="a1daaf0" title="コンタクトフォーム"]'); ?>
            <?php endwhile; ?>
            <?php endif;  ?>
          </div>
        </div>
      </div>
    </div>
    <div class="information-contact-tel">
      <div class="information-contact-tel__information-section-header information-section-header js-fadeUp">
        <h2 class="information-section-header__title">お電話でのお問合わせは<span class="u-mobile"><br></span>こちらから </h2>
      </div>
      <p class="information-contact-tel__text js-fadeUp">
        お問い合わせフォームよりお問い合わせの場合、<span class="u-mobile"><br></span>ご返信までにお時間がかかる場合がございます。<br>
        お急ぎの場合はお電話でお問い合わせください。
      </p>
      <div class="information-contact-tel__box js-fadeUp">
        <div class="information-contact-tel__icon">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/contact-tel_icon.png" alt="">
        </div>
        <a href="tel:0120-681-870" class="information-contact-tel__number">0120-681-870</a>
      </div>
    </div>
    <div class="information-contact__logo-area logo-area">
      <div class="logo-area__inner inner">
        <div class="logo-area__image">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/logo-area.png" alt="寿司ヤマキ">
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>





