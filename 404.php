<?php get_header(); ?>

  <section class="mv-sub">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image js-mv-sub">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_information.jpg" alt="">
      </picture>
    </div>
  </section>
  <section class="error">
    <div class="error__inner inner">
      <div class="error__body">
        <h2 class="error__title">
          申し訳ありません。<br>お探しのページが見つかりません。
        </h2>
        <div class="error__button">
          <a href="<?php echo $top ?>" class="button">トップ</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>