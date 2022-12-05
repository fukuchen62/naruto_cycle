<?php get_header(); ?>

<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<!-- 検索フォーム -->
<h2>スポット検索
</h2>

<?php get_search_form(); ?>

<!-- 記事一覧 -->
<?php
$args = array(
    'post_type' => 'cycle', //カスタム投稿タイプを指定
    // 'taxonomy' => 'restaurant', //カスタムタクソノミーを指定
    'orderby' => 'rand', // ランダムで表示
    'posts_per_page' => -1, //表示する記事数
    // 'post__not_in' => array($post->ID) // 現在表示している記事を除外
);

// カテゴリーで絞る場合
// $taxquerysp = array('relation' => 'AND');
// $taxquerysp[] = array(
//     'taxonomy' => 'shop_type',
//     'terms' => array('cafe', 'restaurant', 'ramen', 'dining', 'cycle', 'cyclepit', 'rental'),
//     'field' => 'slug',
// );
// $args['tax_query'] = $taxquerysp;



$spot_query = new WP_Query($args); //サブループを変数に格納
if ($spot_query->have_posts()) :
    while ($spot_query->have_posts()) :
        $spot_query->the_post();
?>

<!-- ここにhtml -->
<div class="col-md-3">
    <?php get_template_part('template-parts/loop', 'spot') ?>
</div>

<?php endwhile;
endif;
wp_reset_postdata(); //サブループを抜ける
?>



<?php get_footer(); ?>