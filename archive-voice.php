<?php get_header(); ?>
<div class="sub-fv">
  <picture class="sub-fv__img">
    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/voice-fv-sp.jpg" media="(max-width: 767px)" />
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/voice-fv-pc.jpg" alt="真上から見たダイビング講習をしている様子" />
  </picture>
  <div class="sub-fv__inner">
    <h1 class="sub-fv__title">Voice</h1>
  </div>
</div>
<main>
  <div class="sub-voice">
    <div class="sub-voice__inner inner">
    <?php get_template_part('parts/breadcrumb'); ?>
      <div class="sub-voice__contents">
        <div class="sub-voice__tab tab1">
          <div class="tab1__inner">
            <ul class="tab1__items">
              <li class="tab1__item is-active">ALL</li>
              <?php
              $terms = get_terms('voice_category');
              foreach ($terms as $term) {
                echo '<li class="tab1__item"><a href="' . get_term_link($term->slug, 'voice_category') . '">' . $term->name . '</a></li>';
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="sub-voice__container">
          <div class="sub-voice__cards voice-card-list">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="voice-card-list__item voice-card">
                  <div class="voice-card__inner">
                    <div class="voice-card__info">
                      <div class="voice-card__info-inner">
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
                        <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                        if ($taxonomy_terms) {
                          echo '<span class="voice-card__category">' . $taxonomy_terms[0]->name . '</span>';
                        }
                        ?>
                      </div>
                      <h3 class="voice-card__title"><?php the_title(); ?></h3>
                    </div>
                    <div class="voice-card__img">
                      <div class="extend js-extend">
                        <div class="extend__wrap js-wrapper">
                          <?php if (has_post_thumbnail()) : ?>
                            <div class="extend__img">
                              <?php $post_id = get_the_ID(); ?>
                              <img src="<?php echo get_the_post_thumbnail_url($post_id, 'large'); ?>" alt="<?php echo custom_get_img_alt($post_id); ?>">
                            </div>
                          <?php else : ?>
                            <div class="extend__img">
                              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/dog.jpg" alt="体験者（麦わら帽子を被った笑顔の女性）" />
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="voice-card__text-area">
                    <p class="voice-card__text">
                      <?php the_content(); ?>
                    </p>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="wp-pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
