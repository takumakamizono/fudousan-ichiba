<div class="header__inner appear up">
            <h1 class="logo item">
              <a href="<?= esc_url(home_url('/')); ?>">
             
              <img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="ふどうさん市場ロゴ">
             </a>
           </h1>
            <nav class="header__nav">
            <?php
                $args=[
                  'menu'=>'header-nav',
                  'menu_class'=>'header__ul appear left',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>     
            </nav>
            <div class="header__tel">
              <a href="tel:099-802-4118"><img src="<?= get_template_directory_uri(); ?>/images/tel_contact.png" alt="電話番号"></a>
            </div>

            <button class="mobile-menu__btn">
              <span></span>
              <span></span>
              <span></span>
              <img src="<?= get_template_directory_uri(); ?>/images/txt_menu01.png" alt="モバイルメニュー画像">
            </button>
            <?php get_template_part('include/mobile-menu');?>
          </div>