<?php
/*
Template Name: 私たちについて
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common//about-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common//about-fv-pc.jpg" alt="青い空を背景にしたシーサー"/>
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">About&nbsp;us</h1>
      </div>
    </div>
    <main>
      <div class="sub-about">
        <div class="sub-about__inner inner">
        <?php get_template_part('parts/breadcrumb'); ?>
          <div class="sub-about__contents">
            <div class="sub-about__contents-inner">
              <div class="about-content">
                <div class="about-content__img-block about-content__img-block--sub">
                  <div class="about-content__img2 u-desktop">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/about_img2.jpg" alt="屋根の上のシーサー" />
                  </div>
                  <div class="about-content__img1 about-content__img1--sub">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/about_img1.jpg" alt="海の中で泳ぐ黄色い魚" />
                  </div>
                </div>
                <div class="about-content__body about-content__body--sub">
                  <h3 class="about-content__title about-content__title--sub">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
                  <div class="about-content__body-inner about-content__body-inner--sub">
                    <p class="about-content__text">
                      <?php $message = scf::get('message'); echo sanitize_text_field( $message ); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="sub-about__gallery gallery">
          <div class="gallery__inner inner">
            <div class="gallery__head">
              <div class="section-title">
                <span class="section-title__en">gallery</span>
                <h2 class="section-title__ja">フォト</h2>
              </div>
            </div>
            <div class="gallery__wrap">
              <div class="gallery__modal js-overlay"></div>
              <div class="gallery__items">
                <?php
                $gallery = SCF::get('gallery');
                foreach ($gallery as $items ) {
                  if (empty($items['img1'])) {
                    continue;
                  }
                ?>
                  <div class="gallery__item js-photo">
                    <img src="<?php echo wp_get_attachment_url($items['img1']); ?>" alt="" class="js-photo"/>
                  </div>
                <?php
                  }
                ?>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
<?php get_footer(); ?>
