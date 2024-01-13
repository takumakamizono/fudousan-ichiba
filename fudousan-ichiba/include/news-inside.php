
<li id="post-<?php the_ID(); ?>"<?php post_class('news__box item') ?> >
<a href="<?php the_permalink(); ?>">
<div class="news__thumbnail">
<?php if(has_post_thumbnail()): ?>
<?php the_post_thumbnail(); ?>
<?php else: ?>
    <img src="<?= get_template_directory_uri(); ?>/images/fudousanichiba-logo.png" alt="">
<?php endif; ?>
</div>
<div class="news__sentence">                             
                       <ul class="cat">
                       <?php categories_label(); ?>
                       </ul>
                   
                   <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                   <h3 class="news__tit"><?php the_title(); ?></h3>
                   <p class="news__desc"><?php the_excerpt(); ?></p>                                       
                   </div>
                   </a>   
                </li>
                
             

                