<div class="footer appear up">
          <div class="footer__inner">
            <div class="footer__left">
          <div class="logo item">
             <img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="ふどうさん市場ロゴ">
            </div> 
            <ul class="footer__address">
              <li>〒880-2214 鹿児島県鹿児島市吉野町高浜2238-4</li>
              <li>TEL : 099-282-0368</li>
              <li>FAX : 099-264-9666</li>
            </ul>    
        
            </div>
            <div class="footer__right">
            <nav class="footer__nav">
          <?php
                $args=[
                  'menu'=>'footer-nav',
                  'menu_class'=>'footer__ul appear up',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>     
           </nav>
          </div> 
        </div>
        <div class="copyright">
          <div class="copyright__inner">
        <nav class="copyright__nav">
          <?php
                $args=[
                  'menu'=>'footer-nav2',
                  'menu_class'=>'copyright__ul',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>     
           </nav>
        <p class="copyright__p">Copyright&copy;Fudousan-Ichiba,inc<span> All Rights Reserved.</span> </p>
        </div>
        </div>
        <div id="page_top"><a href="#"></a></div>
        </div>
        
