<?php
/*
Template Name: 利用規約
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-pc.jpg" alt="様々な色の小さな魚の群れ"/>
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">Terms&nbsp;of&nbsp;Service</h1>
      </div>
    </div>
    <main>
    <div class="terms-of-service">
      <div class="terms-of-service__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
        <div class="terms-of-service__contents">
          <div class="terms-of-service__contents-inner">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <h2 class="terms-of-service__title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
