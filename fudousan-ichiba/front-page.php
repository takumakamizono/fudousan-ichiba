<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header();?>
  </head>
  <body>
    <div id="global-container">
      <div id="container">
        <div class="nav-trigger"></div>
        <header class="header">
        <?php get_template_part('include/header'); ?>
        </header>
        <div id="content">
        <?php get_template_part('include/hero'); ?>
          <div id="main-content">    
           
            <main>
            <?php get_template_part('include/product'); ?>
           
            <?php get_template_part('include/myhome'); ?>
            <?php get_template_part('include/rentalhome'); ?>
            <?php get_template_part('include/news'); ?>
            <?php get_template_part('include/contact'); ?>
            
             
            </main>
         
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
   
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
