<?php
/*
Template Name: お問い合わせ
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/contact-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/contact-fv-pc.jpg" alt="真上から見た波打ち際" />
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">Contact</h1>
      </div>
    </div>
    <main>
      <div class="page-contact">
        <div class="page-contact__inner inner">
        <?php get_template_part('parts/breadcrumb'); ?>
          <div class="page-contact__form">
            <?php echo do_shortcode('[contact-form-7 id="198" title="お問い合わせフォーム"]');?>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
