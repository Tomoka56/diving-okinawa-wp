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
            <div class="sub-blog__main-contents blog-detail">
              <div class="blog-detail__inner">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <time class="blog-detail__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                <h2 class="blog-detail__title"><?php the_title(); ?></h2>
                <?php  the_content(); ?>
                <?php endwhile; ?>
              <?php endif; ?>
              </div>
              <div class="sub-blog__pagenavi">
              <?php if (get_previous_post()):?>
                <?php previous_post_link('%link', '<'); ?>
                <?php endif; ?>
                <?php if (get_next_post()):?>
                <?php next_post_link('%link', '>'); ?>
                <?php endif; ?>
              </div>
            </div>
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
