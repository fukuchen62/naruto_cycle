<?php get_header(); ?>
<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2>コース紹介</h2>
<h1>COURSE</h1>

<!-- ワードプレスループ始まり -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<!-- コースIDを取得 -->
<?php $cid = get_the_ID(); ?>

<?php the_field('map'); ?>
<h3>コース情報</h3>
<h2>INFOMATION</h2>
<article id="<?php the_ID(); ?>">
    <!-- タイトル -->
    <h2>コース：　<?php the_title(); ?></h2>
    <!-- 距離 -->
    <h2>距離：　<?php the_field('distance'); ?> km</h2>
    <!-- 所要時間 -->
    <h2>所要時間：　<?php the_field('time'); ?></h2>
    <!-- 難易度 -->
    <h2>難易度：　<?php the_field('level'); ?></h2>
    <!-- ビューポイント数 -->
    <h2>ビューポイント数：　<?php the_field('number_viewpoints'); ?> ヶ所</h2>
    <!-- コメント -->
    <h2><?php the_field('comment'); ?></h2>
</article>
<?php endwhile; ?>
<?php endif; ?>

<h2>食べる</h2>
<?php
$args = array(
    'post_type' => 'shop', //カスタム投稿タイプを指定
    'posts_per_page' => -1, //表示する記事数
);
$taxquerysp = array('relation' => 'AND ');
$taxquerysp[] = array(
    'taxonomy' => 'shop_type',
    'terms' => array('eat'),
    'field' => 'slug',
);

$metaquerysp = array('relation' => 'AND ');
$metaquerysp[] = array(
    'key' => 'course_id',
    'value' => $cid,
    'compare' => 'LIKE',
);

$args['tax_query'] = $taxquerysp;
$args['meta_query'] = $metaquerysp;

// print_r($args);

$spot_query = new WP_Query($args); //サブループを変数に格納
s
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

<h2>楽しむ</h2>
<?php
$args = array(
    'post_type' => 'spot', //カスタム投稿タイプを指定
    'posts_per_page' => -1, //表示する記事数
);
$taxquerysp = array('relation' => 'AND ');
$taxquerysp[] = array(
    'taxonomy' => 'spot_type',
    'terms' => array('enjoy'),
    'field' => 'slug',
);

$metaquerysp = array('relation' => 'AND ');
$metaquerysp[] = array(
    'key' => 'course_id',
    'value' => $cid,
    'compare' => 'LIKE',
);

$args['tax_query'] = $taxquerysp;
$args['meta_query'] = $metaquerysp;

// print_r($args);

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


<h2>買う</h2>
<?php
$args = array(
    'post_type' => 'shop', //カスタム投稿タイプを指定
    'posts_per_page' => -1, //表示する記事数
);
$taxquerysp = array('relation' => 'AND ');
$taxquerysp[] = array(
    'taxonomy' => 'shop_type',
    'terms' => array('buy'),
    'field' => 'slug',
);

$metaquerysp = array('relation' => 'AND ');
$metaquerysp[] = array(
    'key' => 'course_id',
    'value' => $cid,
    'compare' => 'LIKE',
);

$args['tax_query'] = $taxquerysp;
$args['meta_query'] = $metaquerysp;

// print_r($args);

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

<h2>サイクルスポット</h2>
<?php
$args = array(
    'post_type' => 'cycle', //カスタム投稿タイプを指定
    'posts_per_page' => -1, //表示する記事数
);
$taxquerysp = array('relation' => 'AND ');
$taxquerysp[] = array(
    'taxonomy' => 'shop_type',
    'terms' => array('cycle'),
    'field' => 'slug',
);

$metaquerysp = array('relation' => 'AND ');
$metaquerysp[] = array(
    'key' => 'course_id',
    'value' => $cid,
    'compare' => 'LIKE',
);

$args['tax_query'] = $taxquerysp;
$args['meta_query'] = $metaquerysp;

// print_r($args);

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

<?php get_footer(); ?> -->