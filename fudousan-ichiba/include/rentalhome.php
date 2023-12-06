<?php
                     $args=[
                       'post_type'=> 'property',
                       'posts_per_page' => 6,
                       'tax_query' => [
                        [
                            'taxonomy' => 'kind', // タームが属するカスタムタクソノミーの名前
                            'field'    => 'slug',
                            'terms'    => 'rentalhome', // 取得したいタームのスラッグ
                        ],
                    ],
                ];
                     $the_query = new WP_Query($args);
                    ?>
<section class="works">
                <div class="section-titles">
                  <h2 class="main-title">
                  rental property
                    <span>ふどうさん市場の賃貸物件！</span>
                  </h2>
                </div>
            
                      
                <div class="works__inner">
              
             <?php if($the_query->have_posts()): ?>  
              <ul class="works__list">
              <?php while($the_query->have_posts()):$the_query->the_post(); ?>
                  <?php get_template_part('include/property-slide'); ?>
                  <?php endwhile; ?>
                  </ul>
                <div class="works__btn appear up">
          
                <?php $purchase_and_sale_term = get_term_by('slug', 'rentalhome', 'kind'); ?>
                <?php if ($purchase_and_sale_term):?>
                  <?php  $purchase_and_sale_link = get_term_link($purchase_and_sale_term); ?>
                  <?php if (!is_wp_error($purchase_and_sale_link)): ?>
                    <a href="<?= esc_url($purchase_and_sale_link); ?>"  class="btn slide-bg item">もっと見る</a>

                    <?php endif; ?>
                    <?php endif; ?>


                  </div>
           <?php else: ?>
            

<div class="works__notInfo">
                      <p>現在、賃貸物件情報は準備中です</p>
                    </div>

            <?php endif; ?>

                 
           </div>
             
              </section>   