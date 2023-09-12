<?php
/*
Template Name: ダイビング情報
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/info-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/info-fv-pc.jpg" alt="黄色い魚の群れのなかダイビング体験をしている人"/>
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">Information</h1>
      </div>
    </div>
    <main>
    <div class="sub-information">
      <div class="sub-information__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
      <div class="sub-information__contents">
        <div class="sub-information__tab tab2">
          <div class="tab2__inner">
            <ul class="tab2__items">
              <li class="tab2__item js-tab2 is-active">
                <div class="tab2__img tab-icon1 visible--pc">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/info-icon-green1.png" alt="クジラのアイコン（白）">
                </div>
                ライセンス<br class="visible--sp">講習
              </li>
              <li class="tab2__item js-tab2">
                <div class="tab2__img tab-icon2 visible--pc">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/info-icon-green2.png" class="visible--pc" alt="クジラのアイコン（グリーン）">
                </div>
                ファン<br class="visible--sp">ダイビング
              </li>
              <li class="tab2__item js-tab2">
                <div class="tab2__img tab-icon3 visible--pc">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/info-icon-green3.png" class="visible--pc" alt="クジラのアイコン（グリーン）">
                </div>
                体験<br class="visible--sp">ダイビング
              </li>
            </ul>
          </div>
        </div>
        <div class="sub-information__cards sub-info-card">
          <div class="sub-info-card__item js-content">
            <div class="sub-info-card__inner">
              <div class="sub-info-card__wrap">
                <div class="sub-info-card__head">
                  <h2 class="sub-info-card__title">ライセンス講習</h2>
                </div>
                <div class="sub-info-card__text-wrap">
                  <p class="sub-info-card__text">
                    泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                  </p>
                </div>
              </div>
              <div class="sub-info-card__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/license.jpg" alt="真上からみた講習中の様子">
              </div>
            </div>
          </div>
          <div class="sub-info-card__item js-content">
            <div class="sub-info-card__inner">
              <div class="sub-info-card__wrap">
                <div class="sub-info-card__head">
                  <h2 class="sub-info-card__title">ファンダイビング</h2>
                </div>
                <div class="sub-info-card__text-wrap">
                  <p class="sub-info-card__text">
                    ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                  </p>
                </div>
              </div>
              <div class="sub-info-card__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/fundiving.jpg" alt="深海の魚群">
              </div>
            </div>
          </div>
          <div class="sub-info-card__item js-content">
            <div class="sub-info-card__inner">
              <div class="sub-info-card__wrap">
                <div class="sub-info-card__head">
                  <h2 class="sub-info-card__title">体験ダイビング</h2>
                </div>
                <div class="sub-info-card__text-wrap">
                  <p class="sub-info-card__text">
                    ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                  </p>
                </div>
              </div>
              <div class="sub-info-card__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/diving.jpg" alt="しっぽの黄色い珍しい魚">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
