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
                  <dt>賃料</dt>
                  <dd id="price"><strong class="num"><?php the_field('rentalhome-rent');?></strong>万円</dd>
                  <dt>共益費</dt>
                  <dd id="maintenance_fee"><span class="num"><?php the_field('rentalhome-kyoekihi');?></span>円</dd>
                </dl>
                <dl class="price-box-sub">
                  <dt>敷金</dt>
                  <dd><?php the_field('rentalhome-shikikin');?></dd>
                  <dt>礼金</dt>
                  <dd><?php the_field('rentalhome-reikin');?></dd>
                  <dt>保証金</dt>
                  <dd><?php the_field('rentalhome-deposit');?></dd>
                  <dt>敷引</dt>
                  <dd><?php the_field('rentalhome-shikibiki');?></dd>
                  <dt>償却金</dt>
                  <dd><?php the_field('rentalhome-depreciation');?></dd>
                  <dt>更新料</dt>
                  <dd><?php the_field('rentalhome-renewal');?></dd>
                  <dt>その他一時金</dt>
                  <dd><?php the_field('rentalhome-repair');?></dd>
                  <dt>その他月次費用</dt>
                  <dd><?php the_field('rentalhome-monthly');?></dd>
                  <dt>その他費用について</dt>
                  <dd><?php the_field('rentalhome-others');?></dd>
                </dl>
                
              </div>
            </section>
            <?php if (  has_term('rentalhome', 'kind')|| has_term('rented-commercial', 'kind')): ?>

            <ul class="detail-icon">
            <li <?= !get_field('icon-checked01') ? '' : ' class="checked"' ?>>
    <img src="<?= get_template_directory_uri(); ?>/images/icon01.png" alt="設備アイコン">
            </li>
              <li <?= !get_field('icon-checked02') ? '' : ' class="checked"' ?>>
              <img src="<?= get_template_directory_uri(); ?>/images/icon02.png" alt="設備アイコン" ></li>
              <li <?= !get_field('icon-checked03') ? '' : ' class="checked"' ?>>
              <img src="<?= get_template_directory_uri(); ?>/images/icon03.png" alt="設備アイコン" ></li>
              <li <?= !get_field('icon-checked04') ? '' : ' class="checked"' ?>>
              <img src="<?= get_template_directory_uri(); ?>/images/icon04.png" alt="設備アイコン" ></li>
              <li <?= !get_field('icon-checked05') ? '' : ' class="checked"' ?>>
              <img src="<?= get_template_directory_uri(); ?>/images/icon05.png" alt="設備アイコン" ></li>
              <li <?= !get_field('icon-checked06') ? '' : ' class="checked"' ?>>
              <img src="<?= get_template_directory_uri(); ?>/images/icon06.png" alt="設備アイコン" ></li>
              <li <?= !get_field('icon-checked07') ? '' : ' class="checked"' ?>>
              <img src="<?= get_template_directory_uri(); ?>/images/icon07.png" alt="設備アイコン" ></li>
              <li <?= !get_field('icon-checked08') ? '' : ' class="checked"' ?>>
              <img src="<?= get_template_directory_uri(); ?>/images/icon08.png" alt="設備アイコン" ></li>
            </ul>
            <?php endif;?>
                          </div>
                        </div>




