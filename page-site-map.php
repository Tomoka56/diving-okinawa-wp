<?php
/*
Template Name: サイトマップ
*/
get_header(); ?>

    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/other-fv-pc.jpg" alt="様々な色の小さな魚の群れ" />
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">Site&nbsp;MAP</h1>
      </div>
    </div>
    <main>
      <div class="site-map">
        <div class="site-map__inner inner">
        <?php get_template_part('parts/breadcrumb'); ?>
          <div class="site-map__contents">
            <nav class="site-map__nav sub-nav sub-nav--black">
              <div class="sub-nav__block">
                <div class="sub-nav__wrapper">
                  <div class="sub-nav__block-pc">
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#campaign" class="sub-nav__link sub-nav__link--icon"> <span class="sub-nav__menu">キャンペーン</span></a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="index.html" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ライセンス取得</span></a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="index.html" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">貸切体験ダイビング</span></a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="index.html" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ナイトダイビング</span></a>
                      </li>
                    </ul>
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#about" class="sub-nav__link sub-nav__link--icon"> <span class="sub-nav__menu">私たちについて</span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="sub-nav__block-pc">
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#information" class="sub-nav__link sub-nav__link--icon"> <span class="sub-nav__menu">ダイビング情報</span></a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="#information" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ライセンス講習</span></a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="#information" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">体験ダイビング</span></a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="#information" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ファンダイビング</span></a>
                      </li>
                    </ul>
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#blog" class="sub-nav__link sub-nav__link--icon"> <span class="sub-nav__menu">ブログ</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="sub-nav__wrapper">
                  <div class="sub-nav__block-pc">
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#voice" class="sub-nav__link sub-nav__link--icon">
                          <span class="sub-nav__menu">お客様の声</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#price" class="sub-nav__link sub-nav__link--icon">
                          <span class="sub-nav__menu">料金一覧</span>
                        </a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="#price" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ライセンス取得</span></a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="#price" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">体験ダイビング</span></a>
                      </li>
                      <li class="sub-nav__item">
                        <a href="#price" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ファンダイビング</span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="sub-nav__block-pc">
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="faq.html" class="sub-nav__link sub-nav__link--icon"> <span class="sub-nav__menu">よくある質問</span></a>
                      </li>
                    </ul>
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#" class="sub-nav__link sub-nav__link--icon">
                          <span class="sub-nav__menu">プライバシー<br class="visible visible--sp" />ポリシー</span></a
                        >
                      </li>
                    </ul>
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#" class="sub-nav__link sub-nav__link--icon"> <span class="sub-nav__menu">利用規約</span></a>
                      </li>
                    </ul>
                    <ul class="sub-nav__items">
                      <li class="sub-nav__item">
                        <a href="#contact" class="sub-nav__link sub-nav__link--icon"> <span class="sub-nav__menu">お問い合わせ</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
