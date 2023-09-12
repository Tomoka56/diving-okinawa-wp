<?php get_header(); ?>
<?php
$campaign = esc_url(home_url('/campaign'));
$about_us = esc_url(home_url('/about-us'));
$information = esc_url(home_url('/information'));
$blog = esc_url(home_url('/blog'));
$voice = esc_url(home_url('/voice'));
$price = esc_url(home_url('/price'));
$contact = esc_url(home_url('/contact'));
?>
<div id="loading" class="top-loading loading js-loading">
  <div class="loading__wrapper">
    <div class="loading__inner">
      <p class="loading__main">diving</p>
      <p class="loading__sub">into&nbsp;the&nbsp;ocean</p>
    </div>
    <div class="loading__mask js-mask">
      <img class="loading__img-left loading__img-left--fadeUp1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/mask1.png" alt="エメラルドグリーンの海底を歩くウミガメ" />
      <img class="loading__img-right loading__img-right--fadeUp2" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/mask2.png" alt="エメラルドグリーンの海底を歩くウミガメ" />
    </div>
  </div>
</div>
<div class="top-fv fv" id="fv">
  <div class="fv__inner">
    <div class="swiper fv__slider js-fv-slider">
      <div class="swiper-wrapper">
        <?php
        $group_sp = get_field('group_sp');
        $group_pc = get_field('group_pc');
        if ($group_sp || $group_pc) : // どちらかのグループフィールドが値を持っている場合
          for ($i = 1; $i <= 4; $i++) :
            $img_pc_key = 'img' . $i . '_pc';
            $img_sp_key = 'img' . $i . '_sp';
            // PC用画像とスマートフォン用画像が存在するかどうかをチェック
            $has_img_pc = !empty($group_pc[$img_pc_key]);
            $has_img_sp = !empty($group_sp[$img_sp_key]);
            if ($has_img_pc || $has_img_sp) :
        ?>
              <div class="swiper-slide">
                <picture class="fv__img">
                  <?php if ($has_img_sp) : ?>
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url($group_sp[$img_sp_key]); ?>" />
                  <?php endif; ?>
                  <?php if ($has_img_pc) : ?>
                    <!-- PC用画像を表示 -->
                    <img src="<?php echo esc_url($group_pc[$img_pc_key]); ?>" />
                  <?php elseif ($has_img_sp) : ?>
                    <!-- PC用画像がない場合はスマートフォン用画像を表示 -->
                    <img src="<?php echo esc_url($group_sp[$img_sp_key]); ?>" />
                  <?php endif; ?>
                </picture>
              </div>
        <?php
            endif; // PC用画像とスマートフォン用画像が存在するかどうかの条件
          endfor;
        endif; // どちらかのグループフィールドが値を持っているかどうかの条件
        ?>
      </div>
    </div>
    <div class="fv__title-block fade-in">
      <h1 class="fv__title">diving</h1>
      <p class="fv__sub">into&nbsp;the&nbsp;ocean</p>
    </div>
  </div>
</div>
<main>
  <section class="top-campaign campaign" id="campaign">
    <div class="campaign__inner inner">
      <div class="campaign__head">
        <div class="section-title">
          <span class="section-title__en">campaign</span>
          <h2 class="section-title__ja">キャンペーン</h2>
        </div>
      </div>
      <div class="campaign__cards">
        <div class="swiper campaign__slider js-campaign-slider">
          <div class="swiper-wrapper">
            <?php
            $args = array(
              'post_type' => 'campaign',
              'orderby' => 'rand',
            );
            $campaign_query = new WP_Query($args);
            ?>
            <?php if ($campaign_query->have_posts()) : ?>
              <?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
                <div class="swiper-slide">
                  <a href="#" class="campaign__card campaign-card">
                    <?php if (has_post_thumbnail()) : ?>
                      <div class="campaign-card__img">
                        <?php the_post_thumbnail(); ?>
                      </div>
                    <?php else : ?>
                      <div class="campaign-card__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/sky.jpg" alt="空" />
                      </div>
                    <?php endif; ?>
                    <div class="campaign-card__body-top">
                      <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                      if ($taxonomy_terms) {
                        echo '<span class="campaign-card__category">' . $taxonomy_terms[0]->name . '</span>';
                      }
                      ?>
                      <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                    </div>
                    <div class="campaign-card__body-bottom">
                      <p class="campaign-card__price-head">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price-inner">
                      <?php if( get_field('price') ):?>
                        <p class="campaign-card__price">&yen;<?php the_field('price'); ?></p>
                      <?php endif; ?>
                        <p class="campaign-card__price-sale">&yen;<?php the_field('price_sale'); ?></p>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="campaign__btn">
        <a href="<?php echo $campaign; ?>" class="btn">
          <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
        </a>
      </div>
      <div class="swiper-btns">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </section>
  <section class="top-about about" id="about">
    <div class="about__inner inner">
      <div class="about__head">
        <div class="section-title">
          <span class="section-title__en">about&nbsp;<span>us</span></span>
          <h2 class="section-title__ja">私たちについて</h2>
        </div>
      </div>
      <div class="about__content about-content">
        <div class="about-content__img-block">
          <div class="about-content__img2">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/about_img2.jpg" alt="屋根の上のシーサー">
          </div>
          <div class="about-content__img1">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/about_img1.jpg" alt="海の中で泳ぐ黄色い魚">
          </div>
        </div>
        <div class="about-content__body">
          <h3 class="about-content__title">
            Dive&nbsp;into<br />the&nbsp;Ocean
          </h3>
          <div class="about-content__body-inner">
            <p class="about-content__text">
              <?php $message = scf::get('message', 80);
              echo sanitize_text_field($message); ?>
            </p>
            <div class="about-content__btn">
              <a href="<?php echo $about_us; ?>" class="btn">
                <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="top-information information" id="information">
    <div class="information__inner inner">
      <div class="information__head">
        <div class="section-title">
          <span class="section-title__en">information</span>
          <h2 class="section-title__ja">ダイビング情報</h2>
        </div>
      </div>
      <div class="information__content information-content">
        <div class="information-content__img">
          <span class="extend js-extend">
            <span class="extend__wrap js-wrapper">
              <span class="extend__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/info_img1.jpg" alt="美しい海の中の様々な魚たち">
              </span>
            </span>
          </span>
        </div>
        <div class="information-content__body">
          <h3 class="information-content__title">ライセンス講習</h3>
          <div class="information-content__text-area">
            <p class="information-content__text">
              当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
            </p>
          </div>
          <div class="information-content__btn">
            <a href="<?php echo $information; ?>" class="btn">
              <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="top-blog blog1" id="blog">
    <div class="blog1__inner inner">
      <div class="blog1__head">
        <div class="section-title section-title--white">
          <span class="section-title__en">blog</span>
          <h2 class="section-title__ja">ブログ</h2>
        </div>
      </div>
      <div class="blog1__container">
        <div class="blog1__cards blog-card-list">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'order' => 'DESC',
          );
          $blog_query = new WP_Query($args);
          ?>
          <?php if ($blog_query->have_posts()) : ?>
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
              <a href="home.html" class="blog-card-list__item blog-card">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="blog-card__img">
                    <?php the_post_thumbnail(); ?>
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
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        <div class="blog1__btn">
          <a href="<?php echo $blog; ?>" class="btn">
            <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="top-voice voice" id="voice">
    <div class="voice__inner inner">
      <div class="voice__head">
        <div class="section-title">
          <span class="section-title__en">voice</span>
          <h2 class="section-title__ja">お客様の声</h2>
        </div>
        <div class="voice__contents voice-card-list">
          <?php
          $args = array(
            'post_type' => 'voice',
            'posts_per_page' => 2,
            'orderby' => 'rand',
          );
          $voice_query = new WP_Query($args);
          ?>
          <?php if ($voice_query->have_posts()) : ?>
            <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
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
                    <h3 class="voice-card__title">
                      <?php echo wp_trim_words(get_the_title(), 20, '…'); ?>
                    </h3>
                  </div>
                  <div class="voice-card__img">
                    <div class="extend js-extend">
                      <div class="extend__wrap js-wrapper">
                        <?php if (has_post_thumbnail()) : ?>
                          <div class="extend__img">
                            <?php the_post_thumbnail(); ?>
                          </div>
                        <?php else : ?>
                          <div class="extend__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/man.png" alt="体験者シルエットイメージ" />
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="voice-card__text-area">
                  <p class="voice-card__text">
                    <?php echo wp_trim_words(get_the_content(), 200, '…'); ?>
                  </p>
                </div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        <div class="voice__btn">
          <a href="<?php echo $voice; ?>" class="btn">
            <span class="btn__bg"><span class="btn__text">View&nbsp;more</span></span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="top-price price" id="price">
    <div class="price__inner inner">
      <div class="price__head">
        <div class="section-title">
          <span class="section-title__en">price</span>
          <h2 class="section-title__ja">料金一覧</h2>
        </div>
      </div>
      <div class="price__wrapper">
        <div class="price__img">
          <span class="extend js-extend">
            <span class="extend__wrap js-wrapper">
              <span class="extend__img">
                <picture class="price__picture">
                  <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/price_img_sp.jpg" media="(max-width: 767px)" />
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/price_img_pc.jpg" alt="美しい海の中の小さな赤い魚の群れ" />
                </picture>
              </span>
            </span>
          </span>
        </div>
        <div class="price__container">
          <?php
          $blocks = array(
            array('title' => 'course-title1', 'field' => 'license', 'course_num' => 'course1', 'price_num' => 'price1'),
            array('title' => 'course-title2', 'field' => 'experience', 'course_num' => 'course2', 'price_num' => 'price2'),
            array('title' => 'course-title3', 'field' => 'fun', 'course_num' => 'course3', 'price_num' => 'price3'),
            array('title' => 'course-title4', 'field' => 'special', 'course_num' => 'course4', 'price_num' => 'price4'),
          );
          foreach ($blocks as $block) {
            $title = scf::get($block['title'], 26);
            $items = SCF::get($block['field'], 26);
            $course_num = $block['course_num'];
            $price_num = $block['price_num'];
            if (empty($title) || empty($items)) {
              continue;
            }
          ?>
            <div class="price__block">
              <h3 class="price__category"><?php echo $title; ?></h3>
              <dl class="price__menu list">
                <?php foreach ($items as $fields) : ?>
                  <?php if (empty($fields[$course_num])) continue; ?>
                  <div class="list__item">
                    <dt class="list__menu"><?php echo $fields[$course_num]; ?></dt>
                    <dd class="list__price">&yen;<?php echo $fields[$price_num]; ?></dd>
                  </div>
                <?php endforeach; ?>
              </dl>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="price__btn">
        <a href="<?php echo $price; ?>" class="btn">
          <span class="btn__bg">
            <span class="btn__text">
              View&nbsp;more
            </span>
          </span>
        </a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
