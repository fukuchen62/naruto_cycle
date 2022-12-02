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

<?php get_header(); ?>

<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>


<main class="main">
    <?php
    //開いているページの情報を取得
    $kind_slug = get_query_var('kind');
    //タクソノミの値にてそのタクソノミをしゅとくする
    $kind = get_term_by('slug', $kind_slug, 'kind');
    ?>
    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $kind->name; ?></h2>
                <span class="title title-en"><?php echo strtoupper($kind->slug); ?></span>
            </div>

            <div class="row justify-content-center">
                <!-- ループの開始 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <!-- 記事を取得して$POSTに代入 -->
                <?php the_post(); ?>

                <div class="col-md-3">
                    <?php get_template_part('template-parts/loop', 'menu') ?>
                </div>


                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>

            </div>
        </div>
    </section>
</main>
<h2>spot一覧表示</h2>


<p>食べる</p>
<p>見る</p>
<p>買う</p>
<p>楽しむ</p>
<p>サイクルスポット</p>

<?php get_footer(); ?>