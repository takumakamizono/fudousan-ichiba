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
            <main>
            <?php get_template_part('include/breadcrumb'); ?> 
            <section class="works-list">
            <div class="work-flex">
                <div class="works-list__inner work-flex__inner "> 
                <?php
        $area =  $_GET['place'];
        ?>
    
    <?php
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'property',
        'meta_query'  => array(
            array(
                 'key'   => "エリア",
                'value' => $area,
               
            )
        )
    );
    $myposts = get_posts($args);
    
    if ($myposts) {
        foreach ($myposts as $post) : setup_postdata($post);

    ?>
       <?php get_template_part('include/property-inside'); ?> 
    <?php endforeach;
        wp_reset_postdata();
    }
    ?>

                </div>
                <?php  get_template_part('include/property-taxlist'); ?> 
                  </div>
      
<?php if(function_exists('wp_pagenavi')){wp_pagenavi();}  ?>

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
