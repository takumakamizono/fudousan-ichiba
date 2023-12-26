<div class="property__block bg-gray pt-md">
                        <div class="property-flex">
                          <div class="contents-area-left">
                            <h3 class="main-title-left mb-sm">DETAIL DATA</h3>
                            <?php
$table = get_field( '詳細情報' );
if ( ! empty ( $table ) ) {
    echo '<table class="property-singleTable">';
        if ( ! empty( $table['caption'] ) ) {
            echo '<caption>' . $table['caption'] . '</caption>';
        }
        if ( ! empty( $table['header'] ) ) {
            echo '<thead>';
                echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                        echo '<th>';
                            echo $th['c'];
                        echo '</th>';
                    }
                echo '</tr>';
            echo '</thead>';
        }
        echo '<tbody>';
            foreach ( $table['body'] as $tr ) {
                echo '<tr>';
                    foreach ( $tr as $td ) {
                        echo '<td>';
                            echo $td['c'];
                        echo '</td>';
                    }
                echo '</tr>';
            }
        echo '</tbody>';
    echo '</table>';
}
?>


                          </div>
                          <div class="contents-area-right ">
                    
            
            <div class="detail-btn">
              
              <a href="<?= home_url('/contact/'); ?>"class="btn slide-bg" >
               お問い合わせ・見学予約はこちら
              </a>
          
                      </div>
            <section class="detail-price">
              <div class="detail-price-box">
                <dl class="price-box-main">
                  <dt>価格</dt>
                  <dd id="price"><strong class="num"><?php the_field('price-propertysale');?></strong>万円</dd>
                </dl>
              
                
                <dl class="price-box-sub">
                <?php if(has_term('land-sale', 'kind') ):?>
                <dt>坪単価</dt>
                  <dd><?php the_field('price-per-tsubo');?></dd>
                  <?php endif;?>
                  <dt>借地期間・地代(月額)</dt>
                  <dd><?php the_field('地代');?></dd>
                  <dt>権利金</dt>
                  <dd><?php the_field('権利金');?></dd>
                  <dt>敷金 / 保証金</dt>
                  <dd><?php the_field('保証金');?></dd>
                  <dt>維持費等</dt>
                  <dd><?php the_field('維持費');?></dd>
                  <dt>その他一時金</dt>
                  <dd><?php the_field('その他一時金');?></dd>
                </dl>
              
              </div>

            </section>
            
                          </div>
                        </div>