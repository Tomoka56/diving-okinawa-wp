<?php
/*
Template Name: 404
*/
get_header(); ?>

    <main>
      <div class="page-404">
        <div class="page-404__inner inner">
        <?php get_template_part('parts/breadcrumb'); ?>
          <div class="page-404__contents">
            <p class="page-404__title">404</p>
            <div class="page-404__text-wrap">
              <p class="page-404__text">
                申し訳ありません<br />
                お探しのページが見つかりません
              </p>
            </div>
            <div class="page-404__btn">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--white">
                <span class="btn__bg btn__bg--white"><span class="btn__text btn__text--green">Page&nbsp;TOP</span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
