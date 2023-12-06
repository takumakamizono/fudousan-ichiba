<?php
$myhome_tit = get_field('myhome_tit', 56);
$myhome_titEN = get_field('myhome_titEN', 56);
$myhome_img = get_field('myhome_img', 56);
$rentalhome_tit = get_field('rentalhome_tit', 56);
$rentalhome_titEN = get_field('rentalhome_titEN', 56);
$rentalhome_img = get_field('rentalhome_img', 56);
$parking_tit = get_field('parking_tit', 56);
$parking_titEN = get_field('parking_titEN', 56);
$parking_img = get_field('parking_img', 56);
$tenant_tit = get_field('tenant_tit', 56);
$tenant_titEN = get_field('tenant_titEN', 56);
$tenant_img = get_field('tenant_img', 56);
$land_tit = get_field('land_tit', 56);
$land_titEN = get_field('land_titEN', 56);
$land_img = get_field('land_img', 56);






?>
<section class="product">
    <div class="product__inner">
    <div class="section-titles">
            <h3 class="main-title">RECOMMENDED<span>物件別イチオシの特集！</span></h3>
        </div>
        <ul class="menu-list">
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($myhome_img); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($myhome_tit); ?></h2>
                    <a class="info" href="<?= get_term_link('myhome', 'kind'); ?>"><?= esc_html($myhome_titEN); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($rentalhome_img); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($rentalhome_tit); ?></h2>
                    <a class="info" href="<?= get_term_link('rentalhome', 'kind'); ?>"><?= esc_html($rentalhome_titEN); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($parking_img); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($parking_tit); ?></h2>
                    <a class="info" href="<?= get_term_link('parking', 'kind'); ?>"><?= esc_html($parking_titEN); ?></a>
                    </div>
                </div>
            </li>
        
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($tenant_img); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($tenant_tit); ?></h2>
                    <a class="info" href="<?= get_term_link('tenant', 'kind'); ?>"><?= esc_html($tenant_titEN); ?></a>
                    </div>
                </div>
            </li>
            <li class="menu-list__item">
                <div class="hovereffect">
                    <img class="bg-blur-img" src="<?= esc_url($land_img); ?>" alt="">
                    <div class="overlay">
                    <h2><?= esc_html($land_tit); ?></h2>
                    <a class="info" href="<?= get_term_link('land', 'kind'); ?>"><?= esc_html($land_titEN); ?></a>
                    </div>
                </div>
            </li>
           
        </ul>


       
    </div>
</section>