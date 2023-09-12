<?php
/*
Template Name: プライバシーポリシー
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-pc.jpg" alt="様々な色の小さな魚の群れ"/>
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">Privacy&nbsp;Policy</h1>
      </div>
    </div>
    <main>
      <div class="privacy-policy">
        <div class="privacy-policy__inner inner">
        <?php get_template_part('parts/breadcrumb'); ?>
          <div class="privacy-policy__contents">
            <div class="privacy-policy__contents-inner">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <h2 class="privacy-policy__title"><?php the_title(); ?></h2>
                  <?php the_content(); ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
