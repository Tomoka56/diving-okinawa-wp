<?php
$contact = esc_url(home_url('/contact'));
?>
<?php if (is_front_page()): ?>
  <section class="top-contact contact" id="contact">
<?php elseif (!is_404()): ?>
  <section class="sub-contact contact" id="contact">
<?php endif; ?>
        <div class="contact__wrapper inner">
          <div class="contact__inner">
            <div class="contact__info">
              <div class="contact__site-title">
                <div class="contact__logo">
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="contact__link">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo-blue.svg" alt="CodeUps" />
                  </a>
                </div>
              </div>
              <div class="contact__info-inner">
                <address class="contact__address">
                  <p class="contact__address-item">沖縄県那覇市1-1</p>
                  <p class="contact__address-item">TEL:0120-000-0000</p>
                  <p class="contact__address-item">営業時間:8:30-19:00</p>
                  <p class="contact__address-item">定休日:毎週火曜日</p>
                </address>
                <div class="contact__img">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57272.98530019767!2d127.64350208809165!3d26.210936437588458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1688014053345!5m2!1sja!2sjp"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
              </div>
            </div>
            <div class="contact__cta">
              <div class="contact__title">
                <div class="section-title section-title--big">
                  <span class="section-title__en">contact</span>
                </div>
              </div>
              <div class="contact__ja-title">
                <h2 class="section-title__ja">お問い合わせ</h2>
              </div>
              <p class="contact__text">ご予約・お問い合わせはコチラ</p>
              <div class="contact__btn">
                <a href="<?php echo $contact; ?>" class="btn">
                  <span class="btn__bg"><span class="btn__text">Contact&nbsp;us</span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
