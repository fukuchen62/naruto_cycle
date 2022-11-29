<?php get_header(); ?>
<h2>検索ページ</h2>

<!-- 結果1 -->
<?php
// searchform.phpから送られてきたパラメーターを取得
$selected_terms = $_GET['shop']; //searchform.phpの<input>のname属性の値と合わせる
print_r($selected_terms);
// searchform.phpで絞り込み条件がある場合
if ($selected_terms) {
    // 絞り込み条件を追加
    $taxquerysp[] = array(
        'taxonomy' => 'shop_type',
        'terms' => $selected_terms, //取得したパラメーター（＝各タームのスラッグ）が入る
        'field' => 'slug',
        'operator' => 'AND', //タームの条件を指定（AND/IN/NOT IN）
    );
}
?>
<div>検索条件</div>
<?php
if (is_array($selected_terms)) { ?>カテゴリ：<?php
                                        foreach ($selected_terms as $val) {
                                            if ($val === end($selected_terms)) {
                                                echo get_cat_name($val);
                                            } else {
                                                echo get_cat_name($val) . ", ";
                                            }
                                        }
                                    }
                                        ?>

<?php
// サブループで表示する記事の条件を指定
$args = array(
    'post_type' => 'shop',
    'posts_per_page' => 10,
    's' => get_search_query(), //これ必須！
    // searchform.phpで送られてきた条件を追加
    'tax_query' => array(
        'relation' => 'AND',
        // $taxquery_taxonomy,
    ),
    $args['tax_query'] = $taxquery_taxonomy,
);

// サブループ作成
$sub_query = new WP_Query($args);
if ($sub_query->have_posts()) :
    while ($sub_query->have_posts()) :
        $sub_query->the_post();
?>

<!-- ここにループ処理 -->
<div class="col-md-3">
    <?php get_template_part('template-parts/loop', 'spot'); ?>
</div>


<?php
    endwhile;
endif;
wp_reset_postdata();
?>




<?php get_footer(); ?>