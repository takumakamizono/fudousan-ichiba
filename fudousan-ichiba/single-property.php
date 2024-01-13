<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header();?>
  </head>
  <body>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header">
        <?php get_template_part('include/header'); ?>
        </header>
        <div id="content">
        <?php get_template_part('include/hero'); ?>
          <div id="main-content">
           
            <?php get_template_part('include/side-left'); ?>
            <main>
            <?php get_template_part('include/breadcrumb'); ?> 

            <section class="property ">
              <div class="property__inner ">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?> 
                  <article id="post-<?php the_ID(); ?>" class="property__content" >
                    <div class="property__content-header">
                    <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    
                     <h2><?php the_title(); ?></h2>  
                     <?php
$point = '';

if (has_term('rentalhome', 'kind')||has_term('rented-commercial', 'kind')||has_term('rented-land', 'kind')||has_term('parking', 'kind')) {
    $point = get_field('rental-point');
} elseif (has_term('myhome', 'kind')||has_term('commercial-for-sale', 'kind')||has_term('land-sale', 'kind')) {
    $point = get_field('sale-point');
} 

if (!empty($point)) {
    echo '<h4 class="works-list__point">' . $point . '</h4>';
}
?>
  <ul class="cat">
                       <?php custom_taxonomy_labels(); ?>
                       </ul>       
                    </div>
                    <div class="property__content-des">
                        <div class="property__block ">
                          <div class="property-flex">
                          <div class="image-area-left">
                        <div class="property-slider">
    <div class="slick-img">
      <?php if(get_field('slide01')): ?>

      <img
        src="<?php the_field('slide01');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit01')): ?>  
      <p class="slick-tit"><?php the_field('tit01');?></p>
      <?php endif; ?>
      <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide02')): ?>  
    <img
        src="<?php the_field('slide02');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit02')): ?>  
      <p class="slick-tit"><?php the_field('tit02');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide03')): ?>  
    <img
        src="<?php the_field('slide03');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit03')): ?>  
      <p class="slick-tit"><?php the_field('tit03');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide04')): ?>  
    <img
        src="<?php the_field('slide04');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit04')): ?>  
      <p class="slick-tit"><?php the_field('tit04');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide05')): ?>  
    <img
        src="<?php the_field('slide05');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit05')): ?>  
      <p class="slick-tit"><?php the_field('tit05');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide06')): ?>  
    <img
        src="<?php the_field('slide06');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit06')): ?>  
      <p class="slick-tit"><?php the_field('tit06');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide07')): ?>  
    <img
        src="<?php the_field('slide07');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit07')): ?>  
      <p class="slick-tit"><?php the_field('tit07');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide08')): ?>  
    <img
        src="<?php the_field('slide08');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit08')): ?>  
      <p class="slick-tit"><?php the_field('tit08');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide09')): ?>  
    <img
        src="<?php the_field('slide09');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit09')): ?>  
      <p class="slick-tit"><?php the_field('tit09');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide10')): ?>  
    <img
        src="<?php the_field('slide10');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit10')): ?>  
      <p class="slick-tit"><?php the_field('tit10');?></p>
      <?php endif; ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <?php if(get_field('slide11')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide11');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit11')): ?>  
      <p class="slick-tit"><?php the_field('tit11');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide12')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide12');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit12')): ?>  
      <p class="slick-tit"><?php the_field('tit12');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide13')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide13');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit13')): ?>  
      <p class="slick-tit"><?php the_field('tit13');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide14')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide14');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit14')): ?>  
      <p class="slick-tit"><?php the_field('tit14');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide15')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide15');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit15')): ?>  
      <p class="slick-tit"><?php the_field('tit15');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide16')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide16');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit16')): ?>  
      <p class="slick-tit"><?php the_field('tit16');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide17')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide17');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit17')): ?>  
      <p class="slick-tit"><?php the_field('tit17');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide18')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide18');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit18')): ?>  
      <p class="slick-tit"><?php the_field('tit18');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide19')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide19');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit19')): ?>  
      <p class="slick-tit"><?php the_field('tit19');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if(get_field('slide20')): ?>  
    <div class="slick-img">
    <img
        src="<?php the_field('slide20');?>"
        alt="スライド画像"
      />
      <?php if(get_field('tit20')): ?>  
      <p class="slick-tit"><?php the_field('tit20');?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
  
  </div>
  <div class="image-area-right">
  <?php if(get_field('floor-plan')): ?>  
    <img src="<?php the_field('floor-plan');?>" alt="見取り図">
    <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-mitorizu.jpg" alt="noiamge画像">
      <?php endif; ?>
  </div>
  </div>    
  <div class="thumbnail">
    <div class="thumbnail-img">
       <?php if(get_field('slide01')): ?>  
      <img
        src="<?php the_field('slide01');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide02')): ?>  
      <img
        src="<?php the_field('slide02');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide03')): ?>  
      <img
        src="<?php the_field('slide03');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide04')): ?>  
      <img
        src="<?php the_field('slide04');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide05')): ?>  
      <img
        src="<?php the_field('slide05');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide06')): ?>  
      <img
        src="<?php the_field('slide06');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide07')): ?>  
      <img
        src="<?php the_field('slide07');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide08')): ?>  
      <img
        src="<?php the_field('slide08');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide09')): ?>  
      <img
        src="<?php the_field('slide09');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide10')): ?>  
      <img
        src="<?php the_field('slide10');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide11')): ?>  
      <img
        src="<?php the_field('slide11');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide12')): ?>  
      <img
        src="<?php the_field('slide12');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide13')): ?>  
      <img
        src="<?php the_field('slide13');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide14')): ?>  
      <img
        src="<?php the_field('slide14');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide15')): ?>  
      <img
        src="<?php the_field('slide15');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide16')): ?>  
      <img
        src="<?php the_field('slide16');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide17')): ?>  
      <img
        src="<?php the_field('slide17');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide18')): ?>  
      <img
        src="<?php the_field('slide18');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide19')): ?>  
      <img
        src="<?php the_field('slide19');?>"
        alt="スライド画像"
      />
       
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide20')): ?>  
      <img
        src="<?php the_field('slide20');?>"
        alt="スライド画像"
      />
      <?php endif; ?>
    </div>
  </div>
                       </div>
                       <?php if (  has_term('rentalhome', 'kind')|| has_term('rented-commercial', 'kind')||has_term('rented-land', 'kind') || has_term('parking', 'kind') ): ?>
                        <?php get_template_part('include/detail-rental'); ?>
                        <?php elseif(has_term('myhome', 'kind')||has_term('commercial-for-sale', 'kind')||has_term('land-sale', 'kind') ):?>
                        <?php get_template_part('include/detail-propertysale'); ?>
                        <?php endif;?>
                        <div class="single__list-btn">
    <?php
    $post_type = get_post_type(); // カスタム投稿タイプのネームを取得
    $post_type_object = get_post_type_object($post_type);
    $menu_name = $post_type_object->labels->menu_name;

    $terms = get_the_terms(get_the_ID(), 'kind'); // 'your_taxonomy'を実際のタクソノミー名に置き換えてください
    

    if ($terms && !is_wp_error($terms)) :
        $current_term = current($terms); // 最初のタームを取得
    
          $term_archive_link = get_term_link($current_term);
       
            if (!is_wp_error($term_archive_link)) :
    ?>
                <a class="btn slide-bg" href="<?= esc_url($term_archive_link); ?>">
                   <?= esc_html($current_term->name); ?>一覧へ戻る
                </a>
    <?php
           
        endif;
    endif;
    ?>
</div>
                      </div>
                 
                    </div>
                  
                  </article >
                  <?php endwhile; ?>   
                <?php endif; ?> 
              

              
              </div>
              <?php get_template_part('include/product-taxlist'); ?>   
              </section>   
            <?php get_template_part('include/contact'); ?>

            </main>
         
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
