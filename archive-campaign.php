<?php get_header(); ?>
<?php
$contact = esc_url(home_url('/contact'));
?>
<div class="sub-fv">
  <picture class="sub-fv__img">
    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/campaign-fv-sp.jpg" media="(max-width: 767px)" />
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/campaign-fv-pc.jpg" alt="黄色い二匹の魚" />
  </picture>
  <div class="sub-fv__inner">
    <h1 class="sub-fv__title">Campaign</h1>
  </div>
</div>
<main>
  <div class="sub-campaign">
    <div class="sub-campaign__inner inner">
    <?php get_template_part('parts/breadcrumb'); ?>
        <div class="sub-campaign__contents">
          <div class="sub-campaign__tab tab1">
            <div class="tab1__inner">
              <ul class="tab1__items">
                <li class="tab1__item is-active">ALL</li>
                <?php
                $terms = get_terms('campaign_category');
                foreach ($terms as $term) {
                  echo '<li class="tab1__item"><a href="' . get_term_link($term->slug, 'campaign_category') . '">' . $term->name . '</a></li>'; //タームのリンク
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="sub-campaign__container">
            <div class="sub-campaign__cards">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <div class="sub-campaign__card campaign-card">
                    <?php if (has_post_thumbnail()) : ?>
                      <div class="campaign-card__img">
                        <?php $post_id = get_the_ID(); ?>
                        <img src="<?php echo get_the_post_thumbnail_url($post_id, 'large'); ?>" alt="<?php echo custom_get_img_alt($post_id); ?>">
                      </div>
                    <?php else : ?>
                      <div class="campaign-card__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/sky.jpg" alt="空" />
                      </div>
                    <?php endif; ?>
                    <div class="campaign-card__body-top campaign-card__body-top--sub">
                      <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                      if ($taxonomy_terms) {
                        echo '<span class="campaign-card__category">' . $taxonomy_terms[0]->name . '</span>';
                      }
                      ?>
                      <h3 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h3>
                    </div>
                    <div class="campaign-card__body-bottom campaign-card__body-bottom--sub">
                      <p class="campaign-card__price-head">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price-inner">
                      <?php if( get_field('price') ):?>
                        <p class="campaign-card__price">&yen;<?php the_field('price'); ?></p>
                      <?php endif; ?>
                        <p class="campaign-card__price-sale campaign-card__price-sale--sub">&yen;<?php the_field('price_sale'); ?></p>
                      </div>
                      <div class="campaign-card__text-inner">
                        <p class="campaign-card__text"><?php the_field('text'); ?></p>
                      </div>
                      <div class="campaign-card__cta-inner">
                        <span class="campaign-card__date"><?php the_field('date_start'); ?>-<?php the_field('date_end'); ?></span>
                        <p class="campaign-card__cta-text">ご予約・お問い合わせはコチラ</p>
                        <div class="campaign-card__btn">
                          <a href="<?php echo $contact; ?>" class="btn">
                            <span class="btn__bg"><span class="btn__text">Contact&nbsp;us</span></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
      <div class="wp-pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </div>
  </div>
</main>
<?php get_footer(); ?>
