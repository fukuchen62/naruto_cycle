<?php
/*
Template Name: 全記事一覧テスト
*/
?>

<?php get_header(); ?>

<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2><?php the_title(); ?></h2>
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5, //表示（取得）する記事の数
    'paged' => $paged
);
$my_query = new WP_Query($args);

if ($my_query->have_posts()) :
    while ($my_query->have_posts()) : $my_query->the_post();
?>

<div class="col-md-3">

    <?php get_template_part('template-parts/loop', 'news') ?>

</div>

<?php endwhile; ?>
<?php endif; ?>

<!-- <!– ページャー —> -->

<?php
if (function_exists('wp_pagenavi')) {
    wp_pagenavi(array('query' => $my_query));
}
?>

<!-- <!– ページャー —> -->
<div>
    <?php get_sidebar('categories'); ?>
    <?php get_sidebar('archives'); ?>
</div>
<?php get_footer(); ?>