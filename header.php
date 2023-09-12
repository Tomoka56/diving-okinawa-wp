<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DTV5XX4YL6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DTV5XX4YL6');
</script>
</head>

<?php
$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign'));
$license = esc_url(home_url('/campaign_category/license/'));
$experience = esc_url(home_url('/campaign_category/experience/'));
$fun = esc_url(home_url('/campaign_category/fun/'));
$about_us = esc_url(home_url('/about-us'));
$information = esc_url(home_url('/information'));
$blog = esc_url(home_url('/blog'));
$voice = esc_url(home_url('/voice'));
$price = esc_url(home_url('/price'));
$faq = esc_url(home_url('/faq'));
$contact = esc_url(home_url('/contact'));
$privacy_policy = esc_url(home_url('/privacy-policy'));
$site_map = esc_url(home_url('/site-map'));
$terms_of_service = esc_url(home_url('/terms-of-service'));
?>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
  <header class="top-header header js-header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__logo">
        <?php else : ?>
          <div class="header__logo">
          <?php endif; ?>
          <a href="<?php echo $home; ?>" class="header__link">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-white.svg" alt="CodeUps" />
          </a>
          <?php if (is_front_page()) : ?>
        </h1>
      <?php else : ?>
    </div>
  <?php endif; ?>
  <nav class="header__nav">
    <ul class="header__pc-nav pc-nav">
      <li class="pc-nav__item">
        <a href="<?php echo $campaign; ?>" class="pc-nav__link"><span class="pc-nav__en">Campaign</span><span class="pc-nav__ja">キャンペーン</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $about_us; ?>" class="pc-nav__link"><span class="pc-nav__en">About us</span><span class="pc-nav__ja">私たちについて</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $information; ?>" class="pc-nav__link"><span class="pc-nav__en">Information</span><span class="pc-nav__ja">ダイビング情報</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $blog; ?>" class="pc-nav__link"><span class="pc-nav__en">Blog</span><span class="pc-nav__ja">ブログ</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $voice; ?>" class="pc-nav__link"><span class="pc-nav__en">Voice</span><span class="pc-nav__ja">お客様の声</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $price; ?>" class="pc-nav__link"><span class="pc-nav__en">Price</span><span class="pc-nav__ja">料金一覧</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $faq; ?>" class="pc-nav__link"><span class="pc-nav__en">FAQ</span><span class="pc-nav__ja">よくある質問</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $contact; ?>" class="pc-nav__link"><span class="pc-nav__en">Contact</span><span class="pc-nav__ja">お問い合わせ</span></a>
      </li>
    </ul>
    <button class="header__btn visible--sp js-hamburger">
      <span class="header__hamburger js-bar"></span>
      <span class="header__hamburger js-bar"></span>
      <span class="header__hamburger js-bar"></span>
    </button>
  </nav>
  </div>
  <div class="header__sp-nav sp-nav js-drawer">
    <div class="sp-nav__block">
      <div class="sp-nav__wrapper">
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $campaign; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">キャンペーン</span></a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $license; ?>" class="sp-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">ライセンス取得</span></a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $experience; ?>" class="sp-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">体験ダイビング</span></a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $fun; ?>" class="sp-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">ファンダイビング</span></a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $about_us; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">私たちについて</span></a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $information; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">ダイビング情報</span></a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $information; ?>" class="sp-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">ライセンス講習</span></a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $information; ?>" class="sp-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">体験ダイビング</span></a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $information; ?>" class="sp-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">ファンダイビング</span></a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $blog; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">ブログ</span></a>
          </li>
        </ul>
      </div>
      <div class="sp-nav__wrapper">
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $voice; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">お客様の声</span>
            </a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $price; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">料金一覧</span>
            </a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $price; ?>" class="sp-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">ライセンス取得</span></a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $price; ?>" class="sp-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">体験ダイビング</span></a>
          </li>
          <li class="sp-nav__item">
            <a href="<?php echo $price; ?>" class="sub-nav__link"><span class="sp-nav__menu sp-nav__menu--sub">ファンダイビング</span></a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $faq; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">よくある質問</span></a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $site_map; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">サイトマップ</span></a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $privacy_policy; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">プライバシー<br class="visible visible--sp" />ポリシー</span></a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $terms_of_service; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">利用規約</span></a>
          </li>
        </ul>
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="<?php echo $contact; ?>" class="sp-nav__link sp-nav__link--icon">
              <span class="sp-nav__menu">お問い合わせ</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </header>
