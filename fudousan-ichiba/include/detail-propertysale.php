<div class="property__block bg-gray pt-md">
                        <div class="property-flex">
                          <div class="contents-area-left">
                            <h3 class="main-title-left">DETAIL DATA</h3>
                            <?php the_content(); ?>

                          </div>
                          <div class="contents-area-right ">
                    
            
            <div class="detail-btn">
              
              <a href="<?= home_url('/contact/'); ?>"class="btn slide-bg" >
               お問い合わせ・見学予約はこちら
              </a>
          
                      </div>
            <section class="detail-price">
              <!-- <h3 class="mgn-btm-20"><img src="/images/detail_price_ttl.png" alt="費用について" class="img-sp" width="145" height="22"></h3> -->
              <div class="detail-price-box">
                <dl class="price-box-main">
                  <dt>価格</dt>
                  <dd id="price"><strong class="num"><?php the_field('price-propertysale');?></strong>万円</dd>
                </dl>
                <dl class="price-box-sub">
                  <dt>間取り</dt>
                  <dd><?php the_field('floorplan-myhome');?></dd>
                  <dt>建物面積</dt>
                  <dd><?php the_field('building-area');?></dd>
                  <dt>土地面積</dt>
                  <dd><?php the_field('land-area');?></dd>
                  <dt>築年月</dt>
                  <dd><?php the_field('years-construction');?></dd>
                  <dt>築年数</dt>
                  <dd><?php the_field('years');?></dd>
                </dl>
              </div>
            </section>
            
                          </div>
                        </div>