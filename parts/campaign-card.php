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
