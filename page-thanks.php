<?php
/*
Template Name: お問い合わせ完了
*/
get_header(); ?>
    <div class="sub-fv">
      <picture class="sub-fv__img">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/contact-fv-sp.jpg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/contact-fv-pc.jpg" alt="真上から見た波打ち際"/>
      </picture>
      <div class="sub-fv__inner">
        <h1 class="sub-fv__title">Contact</h1>
      </div>
    </div>
    <main>
    <div class="thanks">
      <div class="thanks__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
        <div class="thanks__contents">
          <p class="thanks__title">お問い合わせ内容を送信完了しました</p>
            <div class="thanks__text-wrap">
              <p class="thanks__text">このたびは、お問い合わせ頂き<br class="visible--sp">
              誠にありがとうございます。<br>
              お送り頂きました内容を確認の上、<br class="visible--sp">
              3営業日以内に折り返しご連絡させて頂きます。<br>
              また、ご記入頂いたメールアドレスへ、<br class="visible--sp">
              自動返信の確認メールをお送りしております。</p>
            </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
