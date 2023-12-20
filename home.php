<?php get_header(); ?>

  <section class="mv-sub">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image js-mv-sub">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_news.jpg" alt="">
      </picture>
    </div>
  </section>

  <section class="news-list">
    <div class="news-list__news-header news-header js-fadeUp">
      <div class="news-header__inner inner">
        <h2 class="news-header__title">新着情報</h2>
      </div>
    </div>
    <div class="news-list__inner inner">
      <div class="news__cards cards cards--news">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="cards__card card">
          <figure class="card__image js-fadeUp">
            <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('full'); ?>
            <?php } else { ?>
            <?php } ?>
          </figure>
          <div class="card__header">
            <time datetime="<?php the_time('c'); ?>" class="card__date js-fadeUp"><?php the_time('Y.m.d'); ?></time>
            <p class="card__title js-fadeUp"><?php the_title(); ?></p>
          </div>
        </a>
      <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
    <div class="news-list__page-nav inner">
      <?php the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __( '' ),
        'next_text' => __( '' ),  
      )); ?>
    </div>
    <div class="news-list__logo-area logo-area">
      <div class="logo-area__inner inner">
        <div class="logo-area__image">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/logo-area.png" alt="寿司ヤマキ">
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>




 
