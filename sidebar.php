<?php
$blog = esc_url(home_url('/blog'));
$voice = esc_url(home_url('/voice'));
$campaign = esc_url(home_url('/campaign'));
?>

<aside class="sub-blog__side-contents">
  <div class="sub-blog__side-contents-inner">
    <div class="sub-blog__side-block side-bar">
      <div class="side-bar__head">
        <div class="side-bar__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/icon-black.png" alt="クジラのアイコン（黒）" />
        </div>
        <h2 class="side-bar__title">人気記事</h2>
      </div>
      <div class="side-bar__items sub-blog-card-list">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'rand',
        );
        $blog_query = new WP_Query($args);
        ?>
        <?php if ($blog_query->have_posts()) : ?>
          <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="sub-blog-card-list__item sub-blog-card">
              <div class="sub-blog-card__inner">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="sub-blog-card__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php else : ?>
                  <div class="sub-blog-card__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/sky.jpg" alt="空" />
                  </div>
                <?php endif; ?>
                <div class="sub-blog-card__body">
                  <time class="sub-blog-card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                  <h3 class="sub-blog-card__title">
                    <?php echo wp_trim_words( get_the_title(), 16, '…' ); ?>
                  </h3>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="sub-blog__side-block side-bar">
      <div class="side-bar__head">
        <div class="side-bar__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/icon-black.png" alt="クジラのアイコン（黒）" />
        </div>
        <h2 class="side-bar__title">口コミ</h2>
      </div>
      <div class="side-bar__items sub-voice-card-list">
        <?php
        $args = array(
          'post_type' => 'voice',
          'posts_per_page' => 1,
          'orderby' => 'date',
        );
        $voice_query = new WP_Query($args);
        ?>
        <?php if ($voice_query->have_posts()) : ?>
          <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
            <div class="sub-voice-card-list__item sub-voice-card">
              <div class="sub-sub-voice-card__inner">
                <div class="sub-voice-card__img">
                  <span class="extend js-extend">
                    <span class="extend__wrap js-wrapper">
                      <?php if (has_post_thumbnail()) : ?>
                        <span class="extend__img">
                          <?php the_post_thumbnail(); ?>
                        </span>
                      <?php else : ?>
                        <span class="extend__img">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/man.png" alt="体験者シルエットイメージ" />
                        </span>
                      <?php endif; ?>
                    </span>
                  </span>
                </div>
                <div class="sub-voice-card__info">
                  <?php $age = get_field('age');
                  if ($age) {  ?>
                    <span class="voice-card__age-sex">
                      <?php echo $age; ?>
                    </span>
                  <?php
                  }
                  ?>
                  <?php $sex = get_field('sex');
                  if ($sex) {  ?>
                    <span class="voice-card__age-sex">
                      (<?php echo $sex; ?>)
                    </span>
                  <?php
                  }
                  ?>
                  <h3 class="sub-voice-card__title"><?php the_title(); ?></h3>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="side-bar__btn">
        <a href="<?php echo $voice; ?>" class="btn">
          <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
        </a>
      </div>
    </div>
    <div class="sub-blog__side-block side-bar">
      <div class="side-bar__head">
        <div class="side-bar__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/icon-black.png" alt="クジラのアイコン（黒）" />
        </div>
        <h2 class="side-bar__title">キャンペーン</h2>
      </div>
      <div class="side-bar__items sub-campaign-card-list">
        <?php
        $args = array(
          'post_type' => 'campaign',
          'posts_per_page' => 2,
          'orderby' => 'date',
        );
        $campaign_query = new WP_Query($args);
        ?>
        <?php if ($campaign_query->have_posts()) : ?>
          <?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
            <div class="sub-campaign-card-list__item campaign-card">
              <?php if (has_post_thumbnail()) : ?>
                <div class="campaign-card__img">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php else : ?>
                <div class="campaign-card__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/sky.jpg" alt="空" />
                </div>
              <?php endif; ?>
              <div class="campaign-card__body-top campaign-card__body-top--center">
                <h3 class="campaign-card__title"><?php the_title(); ?></h3>
              </div>
              <div class="campaign-card__body-bottom campaign-card__body-bottom--side">
                <p class="campaign-card__price-head">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price-inner">
                <?php if( get_field('price') ):?>
                  <p class="campaign-card__price">&yen;<?php the_field('price'); ?></p>
                <?php endif; ?>
                  <p class="campaign-card__price-sale campaign-card__price-sale--small">&yen;<?php the_field('price_sale'); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="side-bar__btn">
        <a href="<?php echo $campaign; ?>" class="btn">
          <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
        </a>
      </div>
    </div>
    <div class="sub-blog__side-block side-bar">
      <div class="side-bar__head">
        <div class="side-bar__icon">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/icon-black.png" alt="クジラのアイコン（黒）" />
        </div>
        <h2 class="side-bar__title">アーカイブ</h2>
      </div>
      <div class="side-bar__items archive-list">
          <?php
          $current_year = date('Y');
          for ($year = $current_year; $year >= $current_year - 2; $year--) {
            $archive_link = get_year_link($year);
            $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'date_query' => array(
                array(
                  'year' => $year,
                ),
              ),
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
              $is_current_year = ($year === $current_year);
          ?>
              <details class="archive-list__toggle-item" <?php echo $is_current_year ? 'open' : ''; ?>>
                <summary class="archive-list__year"><?php echo $year; ?></summary>
                <?php
                for ($month = 12; $month >= 1; $month--) {
                  $archive_link = get_month_link($year, $month);
                  $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'date_query' => array(
                      array(
                        'year' => $year,
                        'month' => $month,
                      ),
                    ),
                  );
                  $query = new WP_Query($args);
                  if ($query->have_posts()) {
                    $month_label = date('n月', mktime(0, 0, 0, $month, 1, $year));
                ?>
                    <a href="<?php echo $archive_link; ?>">
                      <p class="archive-list__month"><?php echo $month_label; ?></p>
                    </a>
                <?php
                  }
                }
                ?>
              </details>
          <?php
            }
          }
          ?>
      </div>
    </div>
  </div>
</aside>
