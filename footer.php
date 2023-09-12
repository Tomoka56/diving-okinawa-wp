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
<?php if (!is_page(array('contact', 'thanks')) && !is_404()) : ?>
  <?php get_template_part('section-contact'); ?>
<?php endif; ?>

<?php
$footerClass = is_front_page() ? 'top-footer' :
              (is_page('contact') ? 'page-contact-footer' :
              (is_404() ? '' : 'sub-footer'));
?>
<footer class="<?php echo $footerClass; ?> footer" id="footer">
  <div class="footer__inner inner">
    <div class="footer__head">
      <div class="footer__logo">
        <a href="<?php echo $home; ?>" class="footer__link">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-white.svg" alt="CodeUps" />
        </a>
      </div>
      <div class="footer__sns">
        <ul class="footer__sns-items">
          <li class="footer__sns-item">
            <a href="https://www.facebook.com/" class="footer__sns-link" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/facebooklogo.png" alt="Facebook" /></a>
          </li>
          <li class="footer__sns-item">
            <a href="https://www.instagram.com/" class="footer__sns-link" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/instagramlogo.png" alt="Instagram" /></a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="footer__nav sub-nav">
      <div class="sub-nav__block">
        <div class="sub-nav__wrapper">
          <div class="sub-nav__block-pc">
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $campaign; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">キャンペーン</span></a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $license; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ライセンス取得</span></a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $experience; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">体験ダイビング</span></a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $fun; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ファンダイビング</span></a>
              </li>
            </ul>
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $about_us; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">私たちについて</span></a>
              </li>
            </ul>
          </div>
          <div class="sub-nav__block-pc">
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $information; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">ダイビング情報</span></a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $information; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ライセンス講習</span></a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $information; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">体験ダイビング</span></a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $information; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ファンダイビング</span></a>
              </li>
            </ul>
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $blog; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">ブログ</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="sub-nav__wrapper">
          <div class="sub-nav__block-pc">
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $voice; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">お客様の声</span>
                </a>
              </li>
            </ul>
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $price; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">料金一覧</span>
                </a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $price; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ライセンス取得</span></a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $price; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">体験ダイビング</span></a>
              </li>
              <li class="sub-nav__item">
                <a href="<?php echo $price; ?>" class="sub-nav__link"><span class="sub-nav__menu sub-nav__menu--sub">ファンダイビング</span></a>
              </li>
            </ul>
          </div>
          <div class="sub-nav__block-pc">
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $faq; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">よくある質問</span></a>
              </li>
            </ul>
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $site_map; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">サイトマップ</span></a>
              </li>
            </ul>
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $privacy_policy; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">プライバシー<br class="visible visible--sp" />ポリシー</span></a>
              </li>
            </ul>
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $terms_of_service; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">利用規約</span></a>
              </li>
            </ul>
            <ul class="sub-nav__items">
              <li class="sub-nav__item">
                <a href="<?php echo $contact; ?>" class="sub-nav__link sub-nav__link--icon">
                  <span class="sub-nav__menu">お問い合わせ</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="footer__copyright">
    <small>Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights
      Reserved.</small>
  </div>
</footer>
<div class="page-top js-page-top" id="page-top">
  <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/arrow2.png" alt="上向きの矢印"></a>
</div>
<?php wp_footer(); ?>
</body>

</html>
