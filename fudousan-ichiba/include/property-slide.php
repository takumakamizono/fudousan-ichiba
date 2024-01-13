<li id="post-<?php the_ID(); ?>" class='works__item '>
<a href="<?php the_permalink(); ?>">
                    <div class="works__img">
                      <?php if(has_post_thumbnail()): ?>
                     <?php the_post_thumbnail('full'); ?>    
                     <?php else: ?>       
                      <img src="<?= get_template_directory_uri(); ?>/images/company.png" alt="noimage画像"> 
                      <?php endif; ?>
                    </div>
            
            <div class="works__contents">
            <ul class="cat">
                       <?php custom_taxonomy_labels(); ?>
                       </ul>
            <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    <p class="works__title"><?php the_title(); ?></p>
                     <div class="works__desc">
                
  <?= has_term('rentalhome', 'kind') ? '<p class="works__desc-p">' . get_field('rental-point') . ' </p>' : (has_term('myhome', 'kind') ? '<p class="works__desc-p">' . get_field('sale-point') . ' </p>' : ''); ?>

                    </div> 
                    <div class="works__item-btn">
                   <span class="btn"> 詳細を見る</span>
                    </div>
                    </div>
                    </a>
                     </li>
