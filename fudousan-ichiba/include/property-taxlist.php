<?php
$custom_post_type = 'property';
$custom_taxonomy = 'kind';

// カスタム投稿タイプのカテゴリーリストを取得
$categories = get_terms([
    'taxonomy' => $custom_taxonomy,
    'orderby' => 'include', // ソート順
    'parent' => 0,
]);



// カテゴリーリストを表示
if ($categories) : ?>
    <aside class="archive-list">
        <div class="archive-list__block">
            <p class="archive-list__tltle">カテゴリ</p>
            <ul class="archive-list__ul">
                <?php foreach ($categories as $category) {
                    $category_link = get_term_link($category, $custom_taxonomy);
                    ?>
                    <li>
                        <a href="<?= esc_url($category_link); ?>"><?= $category->name; ?></a>
                        <?php
                        // 現在のカテゴリーのサブカテゴリーを取得
                        $subcategories = get_terms([
                            'taxonomy' => $custom_taxonomy,
                            'orderby' => 'include', // ソート順
                            'parent' => $category->term_id, // 現在のカテゴリーのサブカテゴリーを取得
                        ]);

                        // サブカテゴリーが存在する場合は表示
                        if ($subcategories) : ?>
                            <ul class="archive-list__childーul">
                                <?php foreach ($subcategories as $subcategory) {
                                    $subcategory_link = get_term_link($subcategory, $custom_taxonomy);
                                    ?>
                                    <li>
                                        <a href="<?= esc_url($subcategory_link); ?>"><?= $subcategory->name; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
  
<?php endif; ?>

