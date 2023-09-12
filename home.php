<?php get_header(); ?>
<div class="sub-fv">
  <picture class="sub-fv__img">
    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/blog-fv-sp.jpg" media="(max-width: 767px)" />
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/blog-fv-pc.jpg" alt="海の中の稚魚の魚群" />
  </picture>
  <div class="sub-fv__inner">
    <h1 class="sub-fv__title">Blog</h1>
  </div>
</div>
<main>
  <div class="sub-blog">
    <div class="sub-blog__inner inner">
    <?php get_template_part('parts/breadcrumb'); ?>
      <div class="sub-blog__container">
        <div class="sub-blog__main-contents">
          <div class="sub-blog__cards blog-card-list blog-card-list--2colums">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-card-list__item blog-card">
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-card__img">
                      <?php $post_id = get_the_ID(); ?>
                      <img src="<?php echo get_the_post_thumbnail_url($post_id, 'large'); ?>" alt="<?php echo custom_get_img_alt($post_id); ?>">
                    </div>
                  <?php else : ?>
                    <div class="blog-card__img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/sky.jpg" alt="空" />
                    </div>
                  <?php endif; ?>
                  <div class="blog-card__body">
                    <time class="blog-card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <h3 class="blog-card__title">
                      <?php echo wp_trim_words(get_the_title(), 34, '…'); ?>
                    </h3>
                    <p class="blog-card__text">
                      <?php
                      $content = has_excerpt() ? get_the_excerpt() : get_the_content();
                      $trimmed_content = wp_trim_words($content, 85, '…');
                      echo $trimmed_content;
                      ?>
                    </p>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="wp-pagenavi">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
