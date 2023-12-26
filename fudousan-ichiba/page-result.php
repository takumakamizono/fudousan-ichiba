<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<body>


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
                'value' => $area
            )
        )
    );
    $myposts = get_posts($args);
    var_dump($myposts);
    if ($myposts) {
        foreach ($myposts as $post) : setup_postdata($post);

    ?><p>
                <?php the_title();  ?>
             
            </p>
    <?php endforeach;
        wp_reset_postdata();
    }
    ?>
</body>

</html>