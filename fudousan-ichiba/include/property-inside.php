<div id="post-<?php the_ID(); ?>" class="works-list__block">
<a href="<?php the_permalink(); ?>">
  <h3 class="works-list__title"><?php the_title(); ?></h3>
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
<div class="works-list__block-inner">
    <div class="works-list__img">
            <?php the_post_thumbnail('full'); ?>    
            </div>
    
        <div class="works-list__contents">
                    <div class="works-list__desc">           
                    <table cellspacing="0" cellpadding="0" border="0" class="property-archiveTable" > 
                    <?php if ( has_term('rentalhome', 'kind')|| has_term('rented-commercial', 'kind')): ?>
                      <tbody>
                        <tr><th>所在地</th><td colspan="3"><?php the_field('rentalhome-address');?></td> </tr> 
                        <tr><th>交通</th><td colspan="3"><?php the_field('rentalhome-traffic');?></td> </tr>
                         <tr><th>賃料</th><td colspan="3"><?php the_field('rentalhome-rent');?>万円 </td> </tr> 
                         <tr><th>築年月</th><td class="eswsHalfCell"><?php the_field('rentalhome-age');?></td> <th>建物構造</th> <td class="eswsHalfCell"><?php the_field('rentalhome-structure');?></td> </tr>
                          <tr><th>規模</th><td class="eswsHalfCell"><?php the_field('rentalhome-scale');?></td> <th>総戸数</th> <td class="eswsHalfCell"><?php the_field('rentalhome-number-houses');?></td> </tr> 
                        </tbody>
                        <?php elseif(has_term('rented-land', 'kind')):?>
                          <tbody>
                        <tr><th>所在地</th><td colspan="3"><?php the_field('myhome-address');?></td> </tr> 
                        <tr><th>交通</th><td colspan="3"><?php the_field('myhome-traffic');?></td> </tr>
                         <tr><th>賃料</th><td colspan="3"><?php the_field('price-propertysale');?>万円 </td> </tr> 
                         <tr><th>最適用途</th><td class="eswsHalfCell"><?php the_field('optimaluse');?></td> <th>坪数</th> <td class="eswsHalfCell"><?php the_field('tsubo');?></td> </tr>
                          <tr><th>土地面積</th><td class="eswsHalfCell"><?php the_field('土地面積');?></td> <th>規模</th> <td class="eswsHalfCell"><?php the_field('price-per-tsubo');?></td> </tr> 
                        </tbody>
                        <?php elseif(has_term('myhome', 'kind')||has_term('commercial-for-sale', 'kind')):?>
                          <tbody>
                        <tr><th>所在地</th><td colspan="3"><?php the_field('myhome-address');?></td> </tr> 
                        <tr><th>交通</th><td colspan="3"><?php the_field('myhome-traffic');?></td> </tr>
                         <tr><th>販売価格</th><td colspan="3"><?php the_field('price-propertysale');?>万円 </td> </tr> 
                         <tr><th>築年月</th><td class="eswsHalfCell"><?php the_field('years-construction');?></td> <th>間取り</th> <td class="eswsHalfCell"><?php the_field('floorplan-myhome');?></td> </tr>
                          <tr><th>土地面積</th><td class="eswsHalfCell"><?php the_field('land-area');?></td> <th>建物面積</th> <td class="eswsHalfCell"><?php the_field('building-area');?></td> </tr> 
                        </tbody>
                        <?php elseif(has_term('land-sale', 'kind')):?>
                          <tbody>
                        <tr><th>所在地</th><td colspan="3"><?php the_field('myhome-address');?></td> </tr> 
                        <tr><th>交通</th><td colspan="3"><?php the_field('myhome-traffic');?></td> </tr>
                         <tr><th>販売価格</th><td colspan="3"><?php the_field('price-propertysale');?>万円 </td> </tr> 
                         <tr><th>最適用途</th><td class="eswsHalfCell"><?php the_field('optimaluse');?></td> <th>坪数</th> <td class="eswsHalfCell"><?php the_field('tsubo');?></td> </tr>
                          <tr><th>土地面積</th><td class="eswsHalfCell"><?php the_field('土地面積');?></td> <th>坪単価</th> <td class="eswsHalfCell"><?php the_field('price-per-tsubo');?></td> </tr> 
                        </tbody>
                        <?php elseif( has_term('parking', 'kind')):?>
                          <tbody>
                        <tr><th>所在地</th><td colspan="3"><?php the_field('myhome-address');?></td> </tr> 
                        <tr><th>交通</th><td colspan="3"><?php the_field('myhome-traffic');?></td> </tr>
                         <tr><th>賃料</th><td colspan="3"><?php the_field('price-propertysale');?>万円 </td> </tr> 
                         <tr><th>管理費等</th><td class="eswsHalfCell"><?php the_field('optimaluse');?></td> <th>更新料</th> <td class="eswsHalfCell"><?php the_field('tsubo');?></td> </tr>
                          <tr><th></th><td class="eswsHalfCell"><?php the_field('土地面積');?></td> <th></th> <td class="eswsHalfCell"><?php the_field('price-per-tsubo');?></td> </tr> 
                        </tbody>
<?php endif;?>
                      </table>
                    </div>
        </div> 
        </div>
          </a>
</div>


