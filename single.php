<?php get_header(); ?>

  <section class="mv-sub">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image js-mv-sub">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_article.jpg" alt="">
      </picture>
    </div>
  </section>
  
  <section class="two-columns">
    <div class="two-columns__inner inner">
      <div class="two-columns__container">

        <div class="two-columns__article article">
          <div class="article__header">
            <time datetime="<?php the_time('c'); ?>" class="article__date js-fadeUp"><?php the_time('Y.m.d'); ?></time>
            <div class="article__category js-fadeUp">
              <?php 
                $terms = get_the_terms($post->ID,'category') ;
                foreach($terms as $term) {
                  echo $term->name ;
                }
              ?>
            </div>
          </div>
          <h2 class="article__title js-fadeUp"><?php the_title(); ?></h2>
          <div class="article__thumbnail js-fadeUp">
            <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('full'); ?>
            <?php } else { ?>
            <?php } ?>
          </div>
          <div class="article__body js-fadeUp">
            <?php the_content(); ?>
          </div>

          <div class="article__box js-fadeUp">
            
            <?php  
              $prevpost = get_adjacent_post(false, '', true);
              $nextpost = get_adjacent_post(false, '', false);
                
              
              if ($prevpost != NULL) {
                echo '<a class="card card--thumbnail" href="' . esc_url(home_url('/') . $prevpost->post_name . '/') . '" rel="prev">';
                echo '<figure class="card__image">';
                echo '<img src="' . esc_url(get_the_post_thumbnail_url($prevpost->ID, 'thumbnail')) . '"  alt="">';
                echo '</figure>';
                echo '<div class="card__header">';
                echo '<div class="card__date">' . esc_html(get_the_time('Y-m-d', $prevpost->ID)) . '</div>';
                echo '<p class="card__title">' . esc_html($prevpost->post_title) . '</p>';
                // 投稿の時間を表示
                echo '</div>';
                echo '</a>';
              } 
              if ($nextpost != NULL) {
                echo '<a class="card card--thumbnail" href="' . esc_url(home_url('/') . $nextpost->post_name . '/') . '" rel="next">';
                echo '<figure class="card__image">';
                echo '<img src="' . esc_url(get_the_post_thumbnail_url($nextpost->ID, 'thumbnail')) . '"  alt="">';
                echo '</figure>';
                echo '<div class="card__header">';
                echo '<div class="card__date">' . esc_html(get_the_time('Y-m-d', $nextpost->ID)) . '</div>';
                echo '<p class="card__title">' . esc_html($nextpost->post_title) . '</p>';
                // 投稿の時間を表示
                echo '</div>';
                echo '</a>';
              }
            ?>
          </div>

          <div class="article__page-nav page-nav">
            <div class="page-nav__item page-nav__item--prev">
              <?php next_post_link('%link', ''); ?>
            </div>
            <div class="page-nav__item page-nav__item--top">
              <a href="<?php echo $news ?>" class="button button--article">一覧へ</a>
            </div>
            <div class="page-nav__item page-nav__item--next">
              <?php previous_post_link('%link', ''); ?>
            </div>
          </div>
        </div>
        <div class="two-columns__side-bar side-bar">
          <nav class="side-bar__contents js-fadeLeft">
            <h4 class="side-bar__title">【CATEGORY】</h4>
            <ul class="side-bar__items side-categories">
              <?php
              $args = [
                'taxonomy' => 'category',
                'hide_empty' => 0, 
              ];
              $terms = get_terms($args);
              foreach ( $terms as $term ) {
                echo '<li class="side-categories__category"><a class="side-categories__name" href="'.get_term_link($term).'">'.$term->name.'</a></li>';
              }
              ?>
            </ul>
          </nav>
          <nav class="side-bar__contents js-fadeLeft">
            <h4 class="side-bar__title">【ARCHIVE】</h4>
            <ul class="side-bar__items side-archive">
              <?php
              $archive_query = new WP_Query(
                array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'DESC',
                )
              );
              $prev_year = null;
              if ($archive_query->have_posts()) {
                while ($archive_query->have_posts()) {
                  $archive_query->the_post();
                  $year = get_the_date('Y');

                  // 年が変わったら年別のリンクを表示
                  if ($year !== $prev_year) {
                    // 前の年と異なる場合、年別のリンクを表示
                    ?>
                    <li class="side-archive__item">
                      <a class="side-archive__year" href="<?php echo get_year_link($year); ?>">
                        <?php echo $year; ?>
                      </a>
                    </li>
                    <?php
                    $prev_year = $year;
                  }
                }
              }
              wp_reset_postdata(); // クエリのリセット
              ?>
            </ul>
          </nav>
        </div>
      </div>  
    </div>
    <div class="two-columns__logo-area logo-area">
      <div class="logo-area__inner inner">
        <div class="logo-area__image">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/logo-area.png" alt="寿司ヤマキ">
        </div>
      </div>
    </div>
  </section>
  
<?php get_footer(); ?>