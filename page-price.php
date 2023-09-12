<?php
/*
Template Name: 料金一覧
*/
get_header(); ?>

<div class="sub-fv">
  <picture class="sub-fv__img">
    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/price-fv-sp.jpg" media="(max-width: 767px)" />
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/price-fv-pc.jpg" alt="ダイビング体験を始める人が軽く水中に顔をつけ頭だけ出ている様子" />
  </picture>
  <div class="sub-fv__inner">
    <h1 class="sub-fv__title">Price</h1>
  </div>
</div>
<main>
  <div class="sub-price">
    <div class="sub-price__inner inner">
    <?php get_template_part('parts/breadcrumb'); ?>
      <div class="sub-price__contents">
        <?php
        $blocks = array(
          array('title' => 'course-title1', 'field' => 'license', 'course_num' => 'course1', 'price_num' => 'price1'),
          array('title' => 'course-title2', 'field' => 'experience', 'course_num' => 'course2', 'price_num' => 'price2'),
          array('title' => 'course-title3', 'field' => 'fun', 'course_num' => 'course3', 'price_num' => 'price3'),
          array('title' => 'course-title4', 'field' => 'special', 'course_num' => 'course4', 'price_num' => 'price4'),
        );

        foreach ($blocks as $block) {
          $title = scf::get($block['title']);
          $items = SCF::get($block['field']);
          $course_num = $block['course_num'];
          $price_num = $block['price_num'];

          if (empty($title) || empty($items)) {
            continue;
          }
        ?>
          <div class="sub-price__price-list price-list">
            <div class="price-list__head">
              <h2 class="price-list__title"><?php echo $title; ?></h2>
              <div class="price-list__title-img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/info-icon-white.png" alt="">
              </div>
            </div>
            <dl class="price-list__block">
              <?php foreach ($items as $fields) : ?>
                <?php if (empty($fields[$course_num])) continue; ?>
                <div class="price-list__items">
                  <dt class="price-list__course"><?php echo $fields[$course_num]; ?></dt>
                  <dd class="price-list__price">&yen;<?php echo $fields[$price_num]; ?></dd>
                </div>
              <?php endforeach; ?>
            </dl>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
