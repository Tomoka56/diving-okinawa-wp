<?php
/*
Template Name: FAQ
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/faq-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/faq-fv-pc.jpg" alt="エメラルドグリーンの海と青い空"/>
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">FAQ</h1>
      </div>
    </div>
    <main>
    <div class="faq">
      <div class="faq__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
        <div class="faq__contents">
          <dl class="faq__items">
          <?php
          $faq = SCF::get('faq');
          foreach ($faq as $detail) {
            if ($detail['question'] !== "" and $detail['answer'] !== "") {
          ?>
            <div class="faq__item faq-item">
              <dt class="faq-item__term js-accordion">
                <h2 class="faq-item__title js-accordion"><?php echo $detail['question']; ?></h2>
              </dt>
              <dd class="faq-item__description">
                <p class="faq-item__answer"><?php echo $detail['answer']; ?></p>
              </dd>
            </div>
          <?php
            }
          }
          ?>
          </dl>
        </div>
      </div>
    </div>
    </main>
<?php get_footer(); ?>
